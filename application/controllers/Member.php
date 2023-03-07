<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Member_m');
        // if ($this->session->userdata('role') == 'kasir') {
        //     echo "Error Unauthorized";
        //     die;
        // }
        if ($this->session->userdata('role') == 'owner') {
            echo "Error Unauthorized";
            die;
        }
    }
    
	public function index()
	{
		$data['judul'] = "Data Member";
        $data['member'] = $this->Member_m->get_member();

		$this->load->view('template/header', $data);
        $this->load->view('Member/index', $data);
        $this->load->view('template/footer', $data);
	}
    public function tambah()
	{
        $valid = $this->form_validation;

        $valid->set_rules('id_member', 'id_member', 'required');

        if ($valid->run()) {
            $this->Member_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data Member Berhasil Ditambahkan');
            redirect('member', 'refresh');
        }
		$data['judul'] = "Tambah Member";
        $data['member'] = $this->Member_m->get_member();
        
		$this->load->view('template/header', $data);
        $this->load->view('Member/tambah', $data);
        $this->load->view('template/footer', $data);
	}
    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_member', 'id_member', 'required');

        if ($valid->run()) {
            $this->Member_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data Member Berhasil Diubah');
            redirect('member', 'refresh');
        }
		$data['judul'] = "Ubah member";
        $data['member'] = $this->Member_m->get_member($id);
        
		$this->load->view('template/header', $data);
        $this->load->view('Member/ubah', $data);
        $this->load->view('template/footer', $data);
	}
    public function hapus($id)
    {
        $this->db->delete('tb_member', ['id_member' => $id]);
        $this->session->set_flashdata('hapus', 'Data Member Berhasil Dihapus');
        redirect('member', 'refresh');
    }
}
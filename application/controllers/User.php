<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('User_m');
        $this->load->model('Outlet_m');
        if ($this->session->userdata('role') == 'kasir') {
            echo "Error Unauthorized";
            die;
        }
        if ($this->session->userdata('role') == 'owner') {
            echo "Error Unauthorized";
            die;
        }
    }
    
	public function index()
	{
		$data['judul'] = "Data User";
        $data['user'] = $this->User_m->get_user();

		$this->load->view('template/header', $data);
        $this->load->view('User/index', $data);
        $this->load->view('template/footer', $data);
	}
    public function tambah()
	{
        $valid = $this->form_validation;

        $valid->set_rules('id_user', 'id_user', 'required');

        if ($valid->run()) {
            $this->User_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data User Berhasil Ditambahkan');
            redirect('user', 'refresh');
        }
		$data['judul'] = "Tambah User";
        $data['user'] = $this->User_m->get_user();
        $data['Outlet'] = $this->Outlet_m->get_outlet();
        
		$this->load->view('template/header', $data);
        $this->load->view('User/tambah', $data);
        $this->load->view('template/footer', $data);
	}
    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_user', 'id_user', 'required');

        if ($valid->run()) {
            $this->User_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data User Berhasil Diubah');
            redirect('user', 'refresh');
        }
		$data['judul'] = "Ubah Data";
        $data['user'] = $this->User_m->get_user($id);
        $data['outlet'] = $this->Outlet_m->get_outlet();
        
		$this->load->view('template/header', $data);
        $this->load->view('User/ubah', $data);
        $this->load->view('template/footer', $data);
	}
    public function hapus($id)
    {
        $this->db->delete('tb_user', ['id_user' => $id]);
        $this->session->set_flashdata('hapus', 'Data User Berhasil Dihapus');
        redirect('user', 'refresh');
    }
}
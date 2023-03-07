<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        cek_login();
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
		$data['judul'] = "Data Outlet";
        $data['outlet'] = $this->Outlet_m->get_outlet();

		$this->load->view('template/header', $data);
        $this->load->view('Outlet/index', $data);
        $this->load->view('template/footer', $data);
	}
    public function tambah()
	{
        $valid = $this->form_validation;

        $valid->set_rules('id_outlet', 'id_outlet', 'required');

        if ($valid->run()) {
            $this->Outlet_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data Outlet Berhasil Ditambahkan');
            redirect('outlet', 'refresh');
        }
		$data['judul'] = "Tambah Outlet";
        $data['outlet'] = $this->Outlet_m->get_outlet();
        
		$this->load->view('template/header', $data);
        $this->load->view('Outlet/tambah', $data);
        $this->load->view('template/footer', $data);
	}
    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_outlet', 'id_outlet', 'required');

        if ($valid->run()) {
            $this->Outlet_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data Outlet Berhasil Diubah');
            redirect('outlet', 'refresh');
        }
		$data['judul'] = "Ubah Outlet";
        $data['outlet'] = $this->Outlet_m->get_outlet($id);
        
		$this->load->view('template/header', $data);
        $this->load->view('Outlet/ubah', $data);
        $this->load->view('template/footer', $data);
	}
    public function hapus($id)
    {
        $this->db->delete('tb_outlet', ['id_outlet' => $id]);
        $this->session->set_flashdata('hapus', 'Data Outlet Berhasil Dihapus');
        redirect('outlet', 'refresh');
    }
}
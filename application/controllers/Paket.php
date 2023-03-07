<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_m');
        $this->load->model('Outlet_m');
        // if ($this->session->userdata('role') == 'kasir') {
        //     echo "Error Unauthorized";
        //     die;
        // }
        if ($this->session->userdata('role') == 'owner') {
            echo "Error Unauthorized";
            die;
        }
    }
    public function get_paket($id_paket)
    {
        echo json_encode($this->db->get_where('tb_paket', ['id_paket' => $id_paket])->row_array());
    }
   
	public function index()
	{
		$data['judul'] = "Data Paket";
        $data['paket'] = $this->Paket_m->get_paket();

		$this->load->view('template/header', $data);
        $this->load->view('Paket/index', $data);
        $this->load->view('template/footer', $data);
	}
    public function tambah()
	{
        $valid = $this->form_validation;

        $valid->set_rules('id_paket', 'id_paket', 'required');

        if ($valid->run()) {
            $this->Paket_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Data Paket Berhasil Ditambahkan');
            redirect('paket', 'refresh');
        }
		$data['judul'] = "Tambah Paket";
        $data['paket'] = $this->Paket_m->get_paket();
        $data['outlet'] = $this->Outlet_m->get_outlet();
        
		$this->load->view('template/header', $data);
        $this->load->view('Paket/tambah', $data);
        $this->load->view('template/footer', $data);
	}
    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_paket', 'id_paket', 'required');

        if ($valid->run()) {
            $this->Paket_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Data Paket Berhasil Diubah');
            redirect('paket', 'refresh');
        }
		$data['judul'] = "Ubah Paket";
        $data['paket'] = $this->Paket_m->get_paket($id);
        $data['outlet'] = $this->Outlet_m->get_outlet();     
           
		$this->load->view('template/header', $data);
        $this->load->view('Paket/ubah', $data);
        $this->load->view('template/footer', $data);
	}
    public function hapus($id)
    {
        $this->db->delete('tb_paket', ['id_paket' => $id]);
        $this->session->set_flashdata('hapus', 'Data Paket Berhasil Dihapus');
        redirect('paket', 'refresh');
    }
}

<?php

class Anggota extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
        
    }
    public function index(){
        $data['judul'] = 'Data Anggota';
        $data['anggota'] = $this->Anggota_model->getAllAnggota();
        if ($this->input->post('keyword')){
            $data['anggota'] = $this->Anggota_model->cariAnggota();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Anggota';
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Anggota';
        $data['anggota'] = $this->Anggota_model->getAnggotaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/ubah', $data);
        $this->load->view('templates/footer');
    }



    public function aksiTambahAnggota()
    {
        $this->Anggota_model->tambahAnggota();
        $this->session->set_flashdata('flash', 'ditambah');
        redirect('anggota');
    }

    public function aksiUbahAnggota()
    {
        $this->Anggota_model->ubahAnggota();
        $this->session->set_flashdata('flash', 'diubah');
        redirect('anggota');
    }

    public function hapus($id)
    {
        $this->Anggota_model->hapusAnggota($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('anggota');
    }
}
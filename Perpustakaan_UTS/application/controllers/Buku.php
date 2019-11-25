<?php

class Buku extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        
    }
    public function index(){
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->Buku_model->getAllBuku();
        if ($this->input->post('keyword')){
            $data['buku'] = $this->Buku_model->cariBuku();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Buku';
        $this->load->view('templates/header', $data);
        $this->load->view('buku/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Buku';
        $data['buku'] = $this->Buku_model->getBukuById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('buku/ubah', $data);
        $this->load->view('templates/footer');
    }



    public function aksiTambahBuku()
    {
        $this->Buku_model->tambahBuku();
        $this->session->set_flashdata('flash', 'ditambah');
        redirect('buku');
    }

    public function aksiUbahBuku()
    {
        $this->Buku_model->ubahBuku();
        $this->session->set_flashdata('flash', 'diubah');
        redirect('buku');
    }

    public function hapus($id)
    {
        $this->Buku_model->hapusBuku($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('buku');
    }
}
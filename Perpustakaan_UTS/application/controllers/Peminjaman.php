<?php

class Peminjaman extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_model');
        
    }
    public function index(){
        $data['judul'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->Peminjaman_model->getAllPeminjaman();
        if ($this->input->post('keyword')){
            $data['peminjaman'] = $this->Peminjaman_model->cariPeminjaman();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('peminjaman/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Peminjaman_model->hapusPeminjaman($id);
        $this->session->set_flashdata('flash', 'Selesai');
        redirect('peminjaman');
    }
}
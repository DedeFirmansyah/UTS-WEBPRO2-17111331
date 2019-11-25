<?php

/*
--Pilar OOP--
1.Inheritance (Pewarisan)
Class Home dibawah ini contoh penerapan pilar oop inheritance,
dimana class Home mewarisi kelas CI_Controller.
*/
class Home extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Anggota_model');
        
    }
    public function index(){
        $data['judul'] = 'Home';
        $data['buku'] = $this->Buku_model->getAllBuku();
        if ($this->input->post('keyword')){
            $data['buku'] = $this->Buku_model->cariBuku();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    /*
    --Pilar OOP--
    2.Encapsulation (Pembungkusan)
    Function pinjam dibawah ini contoh penerapan pilar oop encapsulation,
    dimana function pinjam memiliki hak askses public yang berarti
    function ini dapat diakses disemua kelas.
    */
    public function pinjam($id)
    {
        $data['judul'] = 'Form Pinjam Buku';
        $data['buku'] = $this->Buku_model->getBukuById($id);
        $data['anggota'] = $this->Anggota_model->getAllAnggota();
        $this->load->view('templates/header', $data);
        $this->load->view('home/pinjam', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->Buku_model->getBukuById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('templates/footer');
    }


    public function aksiPinjamBuku()
    {
        $this->Buku_model->pinjamBuku();
        $this->session->set_flashdata('flash', 'dipinjam');
        redirect('home');
    }
}

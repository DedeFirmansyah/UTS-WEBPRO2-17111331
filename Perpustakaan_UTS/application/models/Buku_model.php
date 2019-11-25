<?php  

class Buku_model extends CI_model{
    
    public function getAllBuku()
    {
        return $this->db->get('buku')->result_array();
    }

    public function getBukuById($id)
    {
        return $this->db->get_where('buku', ['id_buku'=> $id])->row_array();
    }
    
    public function tambahBuku()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "penulis" => $this->input->post('penulis', true),
            "penerbit" => $this->input->post('penerbit', true),
            "tahun_terbit" => $this->input->post('tahun', true)
        ];

        $this->db->insert('buku', $data);
    }

    public function ubahBuku()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "penulis" => $this->input->post('penulis', true),
            "penerbit" => $this->input->post('penerbit', true),
            "tahun_terbit" => $this->input->post('tahun', true)
        ];

        $this->db->where('id_buku', $this->input->post('id'));
        $this->db->update('buku', $data);
    }

    public function hapusBuku($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }
    
    public function cariBuku()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        return $this->db->get('buku')->result_array();
        
    }

    public function pinjamBuku(){
         $data = [
            "id_buku" => $this->input->post('id_buku', true),
            "id_anggota" => $this->input->post('id_anggota', true),
            "tgl_pinjam" => $this->input->post('tgl_pinjam', true),
            "tgl_kembali" => $this->input->post('tgl_kembali', true)
        ];

        $this->db->insert('peminjaman', $data);
    }
}
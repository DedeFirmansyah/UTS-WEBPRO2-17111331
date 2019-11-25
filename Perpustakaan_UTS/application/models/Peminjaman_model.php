<?php  

class Peminjaman_model extends CI_model{
    
    public function getAllPeminjaman()
    {
         $this->db->select('*');
         $this->db->from('peminjaman');
         $this->db->join('buku','buku.id_buku=peminjaman.id_buku');
         $this->db->join('anggota','anggota.id_anggota=peminjaman.id_anggota');
         return $this->db->get()->result_array();
    }

    public function hapusPeminjaman($id)
    {
        $this->db->where('id_peminjaman', $id);
        $this->db->delete('peminjaman');
    }
    
    public function cariPeminjaman()
    {
        $keyword = $this->input->post('keyword', true);
         $this->db->select('*');
         $this->db->from('peminjaman');
         $this->db->join('buku','buku.id_buku=peminjaman.id_buku');
         $this->db->join('anggota','anggota.id_anggota=peminjaman.id_anggota');
         $this->db->like('judul', $keyword);
         return $this->db->get()->result_array();
        
    }

}
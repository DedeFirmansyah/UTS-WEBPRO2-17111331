<?php  

class Anggota_model extends CI_model{
    
    public function getAllAnggota()
    {
        return $this->db->get('anggota')->result_array();
    }


    public function getAnggotaById($id)
    {
        return $this->db->get_where('anggota', ['id_anggota'=> $id])->row_array();
    }
    
    public function tambahAnggota()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
            "telepon" => $this->input->post('telepon', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->insert('anggota', $data);
    }

    public function ubahAnggota()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
            "telepon" => $this->input->post('telepon', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->where('id_anggota', $this->input->post('id'));
        $this->db->update('anggota', $data);
    }

    public function hapusAnggota($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('anggota');
    }
    
    public function cariAnggota()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('anggota')->result_array();
        
    }

}
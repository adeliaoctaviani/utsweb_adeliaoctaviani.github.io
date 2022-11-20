<?php

class Model_buku extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_buku');
    }

    public function tambah_aksi($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_buku($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_buku',$id)
                           ->limit(1)
                           ->get('tb_buku');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->like('nama_buku',$keyword);
        $this->db->or_like('keterangan',$keyword);
        $this->db->or_like('kategori',$keyword);
        $this->db->or_like('harga',$keyword);
        $this->db->or_like('stok',$keyword);
        $this->db->or_like('gambar',$keyword);
        return $this->db->get()->result();
    }
}
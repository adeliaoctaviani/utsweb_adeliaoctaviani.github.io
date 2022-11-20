<?php

class Model_produk extends CI_Model{
    public function data_bisnis(){
        $this->db->get_where("tb_buku",array('kategori' => 'bisnis'));
    }

    public function data_edukasi(){
        $this->db->get_where("tb_buku",array('kategori' => 'edukasi'));
    }

    public function data_keagamaan(){
        $this->db->get_where("tb_buku",array('kategori' => 'keagamaan'));
    }

    public function data_novel(){
        $this->db->get_where("tb_buku",array('kategori' => 'novel'));
    }
}
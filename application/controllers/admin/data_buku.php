<?php

class Data_buku extends CI_Controller{
    public function index()
    {
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_buku', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_buku      = $this->input->post('nama_buku');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
            if ( isset ($gambar)){
                $gambar = $_FILES['gambar']['name'];
            }
        if ($gambar = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal di Upload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_buku'         => $nama_buku,
            'keterangan'        => $keterangan,
            'kategori'          => $kategori,
            'harga'             => $harga,
            'stok'              => $stok,
            'gambar'            => $gambar
        );

        $this->model_buku->tambah_aksi($data, 'tb_buku');
        redirect('index.php/admin/data_buku/index');
    }

    public function edit($id)
    {
        $where = array('id_buku' =>$id);
        $data['buku'] = $this->model_buku->edit_buku($where, 'tb_buku')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_buku', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id             = $this->input->post('id_buku');
        $nama_buku      = $this->input->post('nama_buku');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');

        $data = array(
            'nama_buku'         => $nama_buku,
            'keterangan'        => $keterangan,
            'kategori'          => $kategori,
            'harga'             => $harga,
            'stok'              => $stok
        );

        $where = array(
            'id_buku'    => $id
        );

        $this->model_buku->update_data($where,$data,'tb_buku');
        redirect('admin/data_buku/index');
    }

    public function hapus ($id)
    {
        $where = array('id_buku' => $id);
        $this->model_buku->hapus_data($where, 'tb_buku');
        redirect('admin/data_buku/index');
    }

    public function search ()
    {
        $keyword =  $this->input->post('keywoard');
        $data['data_buku']= $this->model_buku->get_keyword($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('data_buku', $data);
        $this->load->view('templates_admin/footer');
    }
}
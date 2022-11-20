<?php

class Biodata extends CI_Controller{

    public function index()
    {
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/biodata', $data);
        $this->load->view('templates_admin/footer');
    }
}
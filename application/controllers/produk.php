<?php

class Produk extends CI_Controller{
    public function bisnis()
    {
        $data['bisnis'] = $this->model_produk->data_bisnis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bisnis',$data);
        $this->load->view('templates/footer');

    }

    public function edukasi()
    {
        $data['edukasi'] = $this->model_produk->data_bisnis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edukasi',$data);
        $this->load->view('templates/footer');

    }

    public function keagamaan()
    {
        $data['keagamaan'] = $this->model_produk->data_bisnis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keagamaan',$data);
        $this->load->view('templates/footer');

    }

    public function novel()
    {
        $data['novel'] = $this->model_produk->data_bisnis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('novel',$data);
        $this->load->view('templates/footer');

    }

    public function biodata()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('biodata');
        $this->load->view('templates/footer');

    }
}
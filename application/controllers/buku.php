<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->model('kategori_model');
    }

    // =========================
    // TAMPIL DATA
    // =========================
    public function index()
    {
        $data['buku'] = $this->buku_model->getAll();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // FORM TAMBAH
    // =========================
    public function tambah()
    {
        $data['kategori'] = $this->kategori_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/tambah', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // SIMPAN DATA
    // =========================
    public function simpan()
    {
        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul'     => $this->input->post('judul'),
            'penulis'   => $this->input->post('penulis'),
            'id_kategori'=> $this->input->post('id_kategori'),
            'stok'      => $this->input->post('stok')
        ];

        $this->buku_model->insert($data);
        redirect('buku');
    }

    // =========================
    // HAPUS
    // =========================
    public function hapus($id)
    {
        $this->buku_model->delete($id);
        redirect('buku');
    }

    // =========================
    // FORM EDIT
    // =========================
    public function edit($id)
    {
        $data['buku'] = $this->buku_model->getById($id);
        $data['kategori'] = $this->kategori_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // UPDATE
    // =========================
    public function update($id)
    {
        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul'     => $this->input->post('judul'),
            'penulis'   => $this->input->post('penulis'),
            'id_kategori'=> $this->input->post('id_kategori'),
            'stok'      => $this->input->post('stok')
        ];

        $this->buku_model->update($id, $data);
        redirect('buku');
    }
}
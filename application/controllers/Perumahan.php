<?php


class Perumahan extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Perumahan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {


        $data['judul'] = 'Daftar Perumahan';
        $data['perumahan'] = $this->Perumahan_model->getAllPerumahan();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/header');
        $this->load->view('perumahan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'Form Tambah Data Perumahan';


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('luas', 'Luas', 'required|numeric');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
        $this->form_validation->set_rules('desain', 'Desain', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header', $data);
            $this->load->view('perumahan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Perumahan_model->tambahDataPerumahan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('perumahan');
        }
    }

    public function hapus($id)
    {
        $this->Perumahan_model->hapusDataPerumahan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('perumahan');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Perumahan';
        $data['perumahan'] = $this->Perumahan_model->getPerumahanById($id);
        $this->load->view('templates/topbar');
        $this->load->view('templates/header');
        $this->load->view('perumahan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {

        $data['judul'] = 'Form Ubah Data Perumahan';
        $data['perumahan'] = $this->Perumahan_model->getPerumahanByID($id);
        $data['luas'] = ['70/80', '90/100', '135/150'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('luas', 'Luas', 'required|numeric');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
        $this->form_validation->set_rules('desain', 'Desain', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header');
            $this->load->view('perumahan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Perumahan_model->ubahDataPerumahan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('perumahan');
        }
    }
}

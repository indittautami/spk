<?php


class Kriteria extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Kriteria_model');
        $this->load->library('form_validation');
    }

    public function index()
    {


        $data['judul'] = 'Kriteria';
        $data['Kriteria'] = $this->Kriteria_model->getAllKriteria();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/header');
        $this->load->view('kriteria/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'Form Tambah Kriteria';


        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('atribut', 'Atribut', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header', $data);
            $this->load->view('kriteria/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->tambahDataKriteria();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kriteria');
        }
    }

    public function hapus($id)
    {
        $this->Kriteria_model->hapusDataKriteria($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kriteria');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Kriteria';
        $data['kriteria'] = $this->Kriteria_model->getKriteriaById($id);
        $this->load->view('templates/topbar');
        $this->load->view('templates/header');
        $this->load->view('kriteria/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {

        $data['judul'] = 'Form Ubah Data Kriteria';
        $data['kriteria'] = $this->Kriteria_model->getKriteriaByID($id);


        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('atribut', 'Atribut', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header');
            $this->load->view('kriteria/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->ubahDataKriteria();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kriteria');
        }
    }
}

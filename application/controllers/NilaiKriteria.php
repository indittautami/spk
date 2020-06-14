<?php


class NilaiKriteria extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('NilaiKriteria_model');
        $this->load->library('form_validation');
    }

    public function index()
    {


        $data['judul'] = ' Nilai Bobot Kriteria';
        $data['NilaiKriteria'] = $this->NilaiKriteria_model->getAllNilaiKriteria();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/header');
        $this->load->view('nilaikriteria/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'Nilai Bobot Kriteria';


        $this->form_validation->set_rules('angka', 'Angka', 'required');
        $this->form_validation->set_rules('skala', 'Skala', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header', $data);
            $this->load->view('nilaikriteria/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->tambahDataNilaiKriteria();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('nilaikriteria');
        }
    }

    public function hapus($id)
    {
        $this->Kriteria_model->hapusDataNilaiKriteria($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('nilaikriteria');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Nilai Bobot Kriteria';
        $data['nilai bobot kriteria'] = $this->NilaiKriteria_model->getNilaiKriteriaById($id);
        $this->load->view('templates/topbar');
        $this->load->view('templates/header');
        $this->load->view('nilaikriteria/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {

        $data['judul'] = ' Ubah Data Nilai Bobot Kriteria';
        $data['nilaikriteria'] = $this->NilaiKriteria_model->getNilaiKriteriaByID($id);


        $this->form_validation->set_rules('angka', 'Angka', 'required');
        $this->form_validation->set_rules('skala', 'Skala', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header');
            $this->load->view('nilaikriteria/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->ubahDataNilaiKriteria();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('nilaikriteria');
        }
    }
}

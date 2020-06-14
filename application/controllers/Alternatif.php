<?php


class Alternatif extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Alternatif_model');
        $this->load->library('form_validation');
    }

    public function index()
    {


        $data['judul'] = 'Alternatif';
        $data['Alternatif'] = $this->Alternatif_model->getAllAlternatif();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/header');
        $this->load->view('alternatif/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'Form Tambah Alternatif';


        $this->form_validation->set_rules('kode1', 'Kode', 'required');
        $this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header', $data);
            $this->load->view('alternatif/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Alternatif_model->tambahDataAlternatif();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('alternatif');
        }
    }

    public function hapus($id)
    {
        $this->Alternatif_model->hapusDataAlternatif($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('alternatif');
    }



    public function ubah($id)
    {

        $data['judul'] = 'Form Ubah Data Alternatif';
        $data['alternatif'] = $this->Alternatif_model->getAlternatifByID($id);


        $this->form_validation->set_rules('kode1', 'Kode', 'required');
        $this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/topbar');
            $this->load->view('templates/header');
            $this->load->view('alternatif/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Alternatif_model->ubahDataALternatif();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('alternatif');
        }
    }
}

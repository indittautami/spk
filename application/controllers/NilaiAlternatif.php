<?php


class NilaiAlternatif extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('NilaiAlternatif_model');
        $this->load->library('form_validation');
    }

    public function index()
    {


        $data['judul'] = ' Nilai Bobot Alternatif';
        $data['NilaiAlternatif'] = $this->NilaiAlternatif_model->getAllNilaiAlternatif();
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/header');
        $this->load->view('nilaialternatif/index', $data);
        $this->load->view('templates/footer');
    }
}

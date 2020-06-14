<?php

class Perumahan_model extends CI_model
{
    public function getAllPerumahan()
    {

        return $this->db->get('data_perumahan')->result_array();
    }

    public function tambahDataPerumahan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "harga" => $this->input->post('harga', true),
            "luas" => $this->input->post('luas', true),
            "lokasi" => $this->input->post('lokasi', true),
            "fasilitas" => $this->input->post('fasilitas', true),
            "desain" => $this->input->post('desain', true),

        ];

        $this->db->insert('data_perumahan', $data);
    }

    public function hapusDataPerumahan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_perumahan');
    }

    public function getPerumahanById($id)
    {
        return $this->db->get_where('data_perumahan', ['id' => $id])->row_array();
    }

    public function ubahDataPerumahan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "harga" => $this->input->post('harga', true),
            "luas" => $this->input->post('luas', true),
            "lokasi" => $this->input->post('lokasi', true),
            "fasilitas" => $this->input->post('fasilitas', true),
            "desain" => $this->input->post('desain', true),

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_perumahan', $data);
    }
}

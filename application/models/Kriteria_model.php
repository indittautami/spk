<?php
class Kriteria_model extends CI_model
{
    public function getAllKriteria()
    {

        return $this->db->get('kriteria')->result_array();
    }
    public function tambahDataKriteria()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('nama', true),
            "atribut" => $this->input->post('atribut', true),


        ];

        $this->db->insert('kriteria', $data);
    }
    public function hapusDataKriteria($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kriteria');
    }

    public function getKriteriaById($id)
    {
        return $this->db->get_where('kriteria', ['id' => $id])->row_array();
    }

    public function ubahDataKriteria()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('nama', true),
            "atribut" => $this->input->post('atribut', true),


        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kriteria', $data);
    }
}

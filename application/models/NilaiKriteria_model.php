<?php
class NilaiKriteria_model extends CI_model
{
    public function getAllNilaiKriteria()
    {

        return $this->db->get('nilaikriteria')->result_array();
    }
    public function tambahDataNilaiKriteria()
    {
        $data = [
            "angka" => $this->input->post('angka', true),
            "skala" => $this->input->post('skala', true),


        ];

        $this->db->insert('nilaikriteria', $data);
    }
    public function hapusDataNilaiKriteria($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nilaikriteria');
    }

    public function getNilaiKriteriaById($id)
    {
        return $this->db->get_where('nilaikriteria', ['id' => $id])->row_array();
    }

    public function ubahDataNilaiKriteria()
    {
        $data = [
            "angka" => $this->input->post('angka', true),
            "skala" => $this->input->post('skala', true),



        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('nilaikriteria', $data);
    }
}

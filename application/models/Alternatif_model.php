<?php
class Alternatif_model extends CI_model
{
    public function getAllAlternatif()
    {

        return $this->db->get('alternatif')->result_array();
    }
    public function tambahDataAlternatif()
    {
        $data = [
            "kode1" => $this->input->post('kode1', true),
            "nama_alternatif" => $this->input->post('nama_alternatif', true),
            "keterangan" => $this->input->post('keterangan', true),


        ];

        $this->db->insert('alternatif', $data);
    }
    public function hapusDataAlternatif($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('alternatif');
    }

    public function getAlternatifById($id)
    {
        return $this->db->get_where('alternatif', ['id' => $id])->row_array();
    }

    public function ubahDataAlternatif()
    {
        $data = [
            "kode1" => $this->input->post('kode1', true),
            "nama_alternatif" => $this->input->post('nama_alternatif', true),
            "keterangan" => $this->input->post('keterangan', true),


        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('alternatif', $data);
    }
}

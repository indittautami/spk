<?php
class NilaiAlternatif_model extends CI_model
{
    public function getAllNilaiAlternatif()
    {

        return $this->db->get('nilaialternatif')->result_array();
    }
}

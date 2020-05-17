<?php

class Konsul_model extends CI_model
{

    public function getAllKonsul()
    {
        return $this->db->get('konsul')->result_array();
    }

    public function tambahDataKonsul()
    {
        $data = [
            "nama_balita" => $this->input->post('nama_balita', true),
            "nama_ibu" => $this->input->post('nama_ibu', true),
            "tgl_konsul" => $this->input->post('tgl_konsul', true),
            "waktu_konsul" => $this->input->post('waktu_konsul', true),
        ];
        return $this->db->insert('konsul', $data);
    }

    public function getDataKonsulById($id)
    {
        return $this->db->where('id', $id)->get('konsul')->row_array();
    }

    public function editDataKonsul($id)
    {
        $data = [
            "nama_balita" => $this->input->post('nama_balita', true),
            "nama_ibu" => $this->input->post('nama_ibu', true),
            "tgl_konsul" => $this->input->post('tgl_konsul', true),
            "waktu_konsul" => $this->input->post('waktu_konsul', true),
        ];
        return $this->db->where('id', $id)->update('konsul', $data);
    }

    public function hapusDataKonsul($id)
    {
        return $this->db->where('id', $id)->delete('konsul');
    }

    public function cariDataKonsul()
    {
        $keyword = $this->input->post('keyword', true);
        return $this->db->like('nama_balita', $keyword)->or_like('nama_ibu', $keyword)->or_like('tgl_konsul', $keyword)->get('konsul')->result_array();
    }
}

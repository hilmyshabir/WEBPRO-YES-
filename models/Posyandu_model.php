<?php

class Posyandu_model extends CI_model
{

    public function getAllBalita()
    {
        return $this->db->get('tb_balita')->result_array();
    }

    public function tambahDataBalita()
    {
        $data = [
            "nama_balita" => $this->input->post('nama_balita', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jk_balita" => $this->input->post('jk_balita', true),
            "panjang_bdn" => $this->input->post('panjang_bdn', true),
            "berat_bdn" => $this->input->post('berat_bdn', true),
            "nama_ibu" => $this->input->post('nama_ibu', true),
        ];
        return $this->db->insert('tb_balita', $data);
    }

    public function getDataBalitaById($id)
    {
        return $this->db->where('id', $id)->get('tb_balita')->row_array();
    }

    public function editDataBalita($id)
    {
        $data = [
            "nama_balita" => $this->input->post('nama_balita', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jk_balita" => $this->input->post('jk_balita', true),
            "panjang_bdn" => $this->input->post('panjang_bdn', true),
            "berat_bdn" => $this->input->post('berat_bdn', true),
            "nama_ibu" => $this->input->post('nama_ibu', true),
        ];
        return $this->db->where('id', $id)->update('tb_balita', $data);
    }

    public function hapusDataBalita($id)
    {
        return $this->db->where('id', $id)->delete('tb_balita');
    }

    public function cariDataBalita()
    {
        $keyword = $this->input->post('keyword', true);
        return $this->db->like('nama_balita', $keyword)->or_like('tgl_lahir', $keyword)
            ->or_like('jk_balita', $keyword)->or_like('panjang_bdn', $keyword)
            ->or_like('berat_bdn', $keyword)->or_like('nama_ibu', $keyword)->get('tb_balita')->result_array();
    }
}

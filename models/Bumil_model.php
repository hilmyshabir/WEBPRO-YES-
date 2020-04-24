<?php

class Bumil_model extends CI_model
{
    public function getAllBumil()
    {
        return $this->db->get('tb_bumil')->result_array();
    }

    public function tambahDataBumil()
    {
        $data = [
            "id_bumil" => $this->input->post('id_bumil', true),
            "nama_bumil" => $this->input->post('nama_bumil', true),
            "tgl_pelayanan" => $this->input->post('tgl_pelayanan', true),
            "umur_kehamilan" => $this->input->post('umur_kehamilan', true),
            "resiko_kehamilan" => $this->input->post('resiko_kehamilan', true),
            "hasil_penimbangan" => $this->input->post('hasil_penimbangan', true),
            "imunisasi" => $this->input->post('imunisasi', true),
        ];
        return $this->db->insert('tb_bumil', $data);
    }

    public function getDataBumilById($id)
    {
        return $this->db->where('id', $id)->get('tb_bumil')->row_array();
    }

    public function editDataBumil($id)
    {
        $data = [
            "id_bumil" => $this->input->post('id_bumil', true),
            "nama_bumil" => $this->input->post('nama_bumil', true),
            "tgl_pelayanan" => $this->input->post('tgl_pelayanan', true),
            "umur_kehamilan" => $this->input->post('umur_kehamilan', true),
            "resiko_kehamilan" => $this->input->post('resiko_kehamilan', true),
            "hasil_penimbangan" => $this->input->post('hasil_penimbangan', true),
            "imunisasi" => $this->input->post('imunisasi', true),
        ];
        return $this->db->where('id', $id)->update('tb_bumil', $data);
    }

    public function hapusDataBumil($id)
    {
        return $this->db->where('id', $id)->delete('tb_bumil');
    }

    public function cariDataBumil()
    {
        $keyword = $this->input->post('keyword', true);
        return $this->db->like('id_bumil', $keyword)->or_like('nama_bumil', $keyword)->or_like('tgl_pelayanan', $keyword)->or_like('umur_kehamilan', $keyword)->or_like('resiko_kehamilan', $keyword)->or_like('hasil_penimbangan', $keyword)->or_like('imunisasi', $keyword)->get('tb_bumil')->result_array();
    }
}

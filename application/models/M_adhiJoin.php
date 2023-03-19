<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_adhiJoin extends CI_Model
{
    public function kategori()
    {
        $this->db->select('*');
        $this->db->from('subkategori');
        $this->db->join('kategori', 'kategori.id=subkategori.id_kategori');
        return  $this->db->get();
    }

    // pengaduan
    public function pengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik');
        $this->db->join('kategori', 'kategori.id=pengaduan.kategori');
        $this->db->join('subkategori', 'subkategori.subkategori_id=pengaduan.subkategori');
        return  $this->db->get();
    }

    public function riwayat_pengaduan()
    {
        $user = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik');
        $this->db->join('kategori', 'kategori.id=pengaduan.kategori');
        $this->db->join('subkategori', 'subkategori.subkategori_id=pengaduan.subkategori');
        $this->db->where('masyarakat.nik', $user['nik']);
        return  $this->db->get();
    }

    function tanggapan($id)
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik');
        $this->db->join('kategori', 'kategori.id=pengaduan.kategori');
        $this->db->join('subkategori', 'subkategori.subkategori_id=pengaduan.subkategori');
        $this->db->where('id_pengaduan', $id);
        return  $this->db->get();
    }

    public function tanggapanPetugas($id)
    {
        $this->db->select('*');
        $this->db->from('tanggapan');
        $this->db->join('petugas', 'petugas.id_petugas=tanggapan.id_petugas');
        $this->db->where('id_pengaduan', $id);
        return  $this->db->get();
    }
}

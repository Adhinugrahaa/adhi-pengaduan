<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_adhiUser extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('V_adhiUser', $data);
		$this->load->view('user/footer', $data);
	}

	public function pengaduan()
	{
		$data['user'] = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();

		$data['kategori'] = $this->M_adhiDashboard->kategori()->result_array();
		$data['subkategori'] = $this->M_adhiDashboard->subkategori()->result_array();

		$this->load->view('user/header');
		$this->load->view('V_adhiPengaduan', $data);
		$this->load->view('user/footer');
	}

	public function tambahPengaduan()
	{
		$data = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();
		$tgl_pengaduan = $this->input->post('tgl_pengaduan');
		$kategori = $this->input->post('kategori');
		$subkategori = $this->input->post('subkategori');
		$laporan = $this->input->post('laporan');

		// upload file
		$config['upload_path']          = './assets/uploads';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('foto');
		$upload_img = $this->upload->data('file_name');

		$add = array(
			'id_pengaduan' => $data['id'],
			'tanggal_pengaduan' => date('Y-m-d'),
			'nik' => $data['nik'],
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'isi_laporan' => $laporan,
			'foto' => $upload_img,

		);

		$this->M_adhiUser->tambahPengaduan($add);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Laporan Anda Telah Terkirim !
		  </div>');
		redirect('C_adhiUser');
	}

	// public function insertpengaduan()
	// {
	//     $data = [
	//         'nik' => $this->session->userdata('nik'),
	//         'id_subkategori' => $this->input->post('subkategori'),
	//         'tgl_pengaduan' => $this->input->post('tgl_pengaduan'),
	//         'isi_laporan' => $this->input->post('isi'),
	//         'foto' => $this->input->post('foto'),
	//         'status' => 0
	//     ];

	//     $this->M_adhiUser->tambahPengaduan($data);
	//     $this->session->set_flashdata('pengaduan', '<div class="alert alert-success" role="alert"> Berhasil ditambahkan! </div>');
	//     redirect('pengaduan');
	// }

	public function get_sub_kategori()
	{
		$id_kategori = $this->input->post('id');
		$sub_kategori = $this->db->get_where('subkategori', ['id_kategori' => $id_kategori])->result();
		echo json_encode($sub_kategori);
	}

	// Riwayat
	public function riwayat()
	{
		$data['user'] = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();

		$data['riwayat'] = $this->M_adhiUser->riwayat()->result_array();


		$this->load->view('user/header');
		$this->load->view('V_adhiRiwayat', $data);
		$this->load->view('user/footer');
	}
	// Pofil
	public function profil()
	{
		$data['user'] = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();

		$data['riwayat'] = $this->M_adhiJoin->riwayat_pengaduan()->result_array();

		$data['title'] = 'Profil';
		$this->load->view('user/headerUser', $data);
		$this->load->view('V_adhiProfil', $data);
		$this->load->view('user/footer');
	}

	public function editProfil()
	{
		$data['user'] = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();
		$user = $this->M_adhiUser->userData($this->session->userdata('username'))->row_array();
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$telepon = $this->input->post('telepon');
		$nik = $this->input->post('nik');

		$update = [
			'nama' => $nama,
			'username' => $username,
			'telepon' => $telepon,
			'nik' => $nik,
		];

		$this->db->where('id', $user['id']);
		$this->M_adhiUser->editProfil($update);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Profil berhasil di update !
		  </div>');
		redirect('C_adhiUser/profil');

	}




}

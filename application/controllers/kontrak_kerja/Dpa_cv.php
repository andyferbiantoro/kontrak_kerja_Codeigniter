<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dpa_cv extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->library('form_validation');
	}

	public function data_rekanan(){

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		//echo 'selamat datang ' . $data['user']['name'];
		$this->form_validation->set_rules('nama_perusahaan','Nama_perusahaan','required|trim');
		$this->form_validation->set_rules('nama_direktur','Nama_direktur','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('no_telp','No_telp','required|trim');
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		$this->form_validation->set_rules('npwp','Npwp','required|trim');
		$this->form_validation->set_rules('nama_notaris','Nama_notaris','required|trim');
		$this->form_validation->set_rules('no_akte_notaris','No_akte_notaris','required|trim');
		$this->form_validation->set_rules('tgl_akte_notaris','Tgl_akte_notaris','required|trim');
		
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Data Rekanan';
			$this->load->view('templates_beranda/beranda_header',$data);
			$this->load->view('templates_beranda/beranda_sidebar');
			$this->load->view('kontrak_kerja_baru/data_dpa_cv/data_rekanan');
			$this->load->view('templates_beranda/beranda_footer');
			
		}else{
			$data = [
				'nama_perusahaan' => $this->input->post('nama_perusahaan'),
				'nama_direktur' => $this->input->post('nama_direktur'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('no_telp'),
				'alamat' => $this->input->post('alamat'),
				'npwp' => $this->input->post('npwp'),
				'nama_notaris' => $this->input->post('nama_notaris'),
				'no_akte_notaris' => $this->input->post('no_akte_notaris'),
				'tgl_akte_notaris' => $this->input->post('tgl_akte_notaris'),
				

			];

			$this->db->insert('data_rekanan',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Data Rekanan Berhasil diiput ! </div>');
			redirect('kontrak_kerja/dpa_cv/data_rekanan');
		}
	}


	public function data_pekerjaan(){

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$data['hps'] = $this->db->get('hps')->result_array();
		
		//echo 'selamat datang ' . $data['user']['name'];
		$this->form_validation->set_rules('id_hps','Id_hps','required|trim');
		$this->form_validation->set_rules('lingkup_pekerjaan','Lingkup_pekerjaan','required|trim');
		$this->form_validation->set_rules('paket_pekerjaan','Paket_pekerjaan','required|trim');
		$this->form_validation->set_rules('nama_kegiatan','Nama_kegiatan','required|trim');
		$this->form_validation->set_rules('sub_kegiatan','Sub_kegiatan','required|trim');
		$this->form_validation->set_rules('no_dpa','No_dpa','required|trim');
		$this->form_validation->set_rules('kode_rekening','Kode_rekening','required|trim');
		$this->form_validation->set_rules('sumber_pendanaan','Sumber_pendanaan','required|trim');
		$this->form_validation->set_rules('satuan_kerja','Satuan_kerja','required|trim');
		$this->form_validation->set_rules('tahun','Tahun','required|trim');
		$this->form_validation->set_rules('pagu_anggaran','Pagu_anggaran','required|trim');
		$this->form_validation->set_rules('pelaksanaan','Pelaksanaan','required|trim');
		$this->form_validation->set_rules('harga_nego/kontrak','Harga_nego/kontrak','required|trim');
		

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Data Pekerjaan';
			$this->load->view('templates_beranda/beranda_header',$data);
			$this->load->view('templates_beranda/beranda_sidebar');
			$this->load->view('kontrak_kerja_baru/data_dpa_cv/data_pekerjaan',$data);
			$this->load->view('templates_beranda/beranda_footer');

		}else{
			$data = [
				'id_hps' => $this->input->post('id_hps'),
				'lingkup_pekerjaan' => $this->input->post('lingkup_pekerjaan'),
				'paket_pekerjaan' => $this->input->post('paket_pekerjaan'),
				'nama_kegiatan' => $this->input->post('nama_kegiatan'),
				'sub_kegiatan' => $this->input->post('sub_kegiatan'),
				'no_dpa' => $this->input->post('no_dpa'),
				'kode_rekening' => $this->input->post('kode_rekening'),
				'sumber_pendanaan' => $this->input->post('sumber_pendanaan'),
				'satuan_kerja' => $this->input->post('satuan_kerja'),
				'tahun' => $this->input->post('tahun'),
				'pagu_anggaran' => $this->input->post('pagu_anggaran'),
				'pelaksanaan' => $this->input->post('pelaksanaan'),
				'harga_nego/kontrak' => $this->input->post('harga_nego/kontrak'),
				

			];

			$this->db->insert('data_pekerjaan',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Data Pekerjaan Berhasil diiput ! </div>');
			redirect('kontrak_kerja/dpa_cv/data_pekerjaan');
		}
	}			



	public function data_pa_ppk(){

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		//echo 'selamat datang ' . $data['user']['name'];
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('nip','Nip','required|trim');
		$this->form_validation->set_rules('pangkat/gol','Pangkat/gol','required|trim');
		$this->form_validation->set_rules('jabatan','Jabatan','required|trim');
		$this->form_validation->set_rules('selaku','Selaku','required|trim');
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Data PPA/CV';
			$this->load->view('templates_beranda/beranda_header',$data);
			$this->load->view('templates_beranda/beranda_sidebar');
			$this->load->view('kontrak_kerja_baru/data_dpa_cv/data_pa_ppk');
			$this->load->view('templates_beranda/beranda_footer');
			
		}else{
			$data = [
				'nama' => $this->input->post('nama'),
				'nip' => $this->input->post('nip'),
				'pangkat/gol' => $this->input->post('pangkat/gol'),
				'jabatan' => $this->input->post('jabatan'),
				'selaku' => $this->input->post('selaku'),
				'alamat' => $this->input->post('alamat'),

			];

			$this->db->insert('data_pa/ppk',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Data PA/PPK Berhasil diiput ! </div>');
			redirect('kontrak_kerja/dpa_cv/data_pa_ppk');
		}
	}			


	public function data_ppbj(){

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		//echo 'selamat datang ' . $data['user']['name'];
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('nip','Nip','required|trim');
		$this->form_validation->set_rules('jabatan','Jabatan','required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Data PPBJ';
			$this->load->view('templates_beranda/beranda_header',$data);
			$this->load->view('templates_beranda/beranda_sidebar');
			$this->load->view('kontrak_kerja_baru/data_dpa_cv/data_ppbj');
			$this->load->view('templates_beranda/beranda_footer');
			
		}else{
			$data = [
				'nama' => $this->input->post('nama'),
				'nip' => $this->input->post('nip'),
				'jabatan' => $this->input->post('jabatan'),
				
			];

			$this->db->insert('data_ppbj',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Data PPBJ Berhasil diiput ! </div>');
			redirect('kontrak_kerja/dpa_cv/data_ppbj');
		}
	}			
}
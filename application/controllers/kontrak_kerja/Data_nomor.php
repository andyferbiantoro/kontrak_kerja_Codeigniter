<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_nomor extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		//echo 'selamat datang ' . $data['user']['name'];
		$data['data_nomor'] = $this->db->get('data_nomor')->result_array();

		
			$data['title'] = 'Data Nomor';
			$this->load->view('templates_beranda/beranda_header',$data);
			$this->load->view('templates_beranda/beranda_sidebar');
			$this->load->view('kontrak_kerja_baru/data_nomor/index',$data);
			$this->load->view('templates_beranda/beranda_footer');
			
		
	}


	public function tambah_data_nomor(){

		$data = [
				'uraian' => $this->input->post('uraian'),
				'nomor' => $this->input->post('nomor'),
				'tanggal' => $this->input->post('tanggal'),

			];

			$this->db->insert('data_nomor',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Data Nomor Berhasil diiput ! </div>');
			redirect('kontrak_kerja/data_nomor');
	}
}
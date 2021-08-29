<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function index(){

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		//echo 'selamat datang ' . $data['user']['name'];

		
		$data['title'] = 'Beranda';
			$this->load->view('templates_beranda/beranda_header',$data);
			$this->load->view('templates_beranda/beranda_sidebar');
			$this->load->view('beranda/index');
			$this->load->view('templates_beranda/beranda_footer');
	}
	
}
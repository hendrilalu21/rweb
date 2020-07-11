<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		 $this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('_partials/header_pelapor');
		$this->load->view('home');
		$this->load->view('_partials/footer');
	}

	public function login(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		if($user == 'admin' && $pass == 'admin')
		{
			$this->session->set_userdata('username, $user');
			redirect('Lapor/admin');
		}else{
			$this->load->view('login');
		}
	}

	public function admin(){
		$this->load->view('_partials/header_admin');
		$this->load->view('home');
		$this->load->view('_partials/footer');
	}

	public function logout(){
		$this->session->unset_userdata(array('username'=>''));
		redirect('Lapor/index');
	}

	public function aksi(){

         $this->form_validation->set_rules('username','username','required');

         $this->form_validation->set_rules('password','password','required');

            if($this->form_validation->run() != false){
                   echo "Form validation";
             }else{
                     echo "eror";
                   }
            }

	public function data_bencana()
	{
		$this->load->model('m_lapor');

		$data['lapor_bencana'] = $this->m_lapor->get_data_bencana();

		$this->load->view('_partials/header_admin');

		$this->load->view('data_laporan_bencana', $data);

		$this->load->view('_partials/footer');


	}

	public function data_pengungsi()
	{
		$this->load->model('m_lapor');

		$data['lapor_pengungsi'] = $this->m_lapor->get_data_pengungsi();

		$this->load->view('_partials/header_admin');

		$this->load->view('data_laporan_pengungsi', $data);

		$this->load->view('_partials/footer');
	}


	public function tambah_laporan_bencana()
	{
		
		$this->load->view('_partials/header_pelapor');

		$this->load->view('tambah_laporan_bencana');

		$this->load->view('_partials/footer');
	}

	public function tambah_laporan_pengungsi()
	{
		
		$this->load->view('_partials/header_pelapor');

	$this->load->view('tambah_laporan_pengungsi');

		$this->load->view('_partials/footer');
	}


	public function proses_tambah_laporan_bencana()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$laporan = $this->input->post('laporan');
		$status = $this->input->post('status');

		$data = array(

				'nama' => $nama,
				'email' => $email,
				'no_hp' => $no_hp,
				'laporan' => $laporan,
				'status' => $status
		);

		$this->m_lapor->input_data_laporan_bencana($data, 'lapor_bencana');
		redirect('lapor/');
	}

	public function proses_tambah_laporan_pengungsi()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$laporan = $this->input->post('laporan');
		

		$data = array(

				'nama' => $nama,
				'email' => $email,
				'no_hp' => $no_hp,
				'laporan' => $laporan,
				
		);

		$this->m_lapor->input_data_laporan_pengungsi($data, 'lapor_pengungsi');
		redirect('lapor/');
	}




	function hapus_laporan_bencana($id){
		$where = array('id' => $id);
		$this->m_lapor->hapus_laporan_bencana($where,'lapor_bencana');
		redirect('lapor/data_bencana');
	}

		function hapus_laporan_pengungsi($id){
		$where = array('id' => $id);
		$this->m_lapor->hapus_laporan_pengungsi($where,'lapor_pengungsi');
		redirect('lapor/data_pengungsi');
	}



	function edit_laporan_bencana($id){

		
		$this->load->view('_partials/header_admin');

		$where = array('id' => $id);
		$data['lapor_bencana'] = $this->m_lapor->edit_laporan_bencana($where,'lapor_bencana')->result();
		$this->load->view('edit_laporan_bencana',$data);

		
		$this->load->view('_partials/footer');
	}

	function edit_data_laporan_bencana(){

	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$no_hp = $this->input->post('no_hp');
	$laporan = $this->input->post('laporan');
	$status = $this->input->post('status');


	$data = array(
		'id' => $id,
		'nama' => $nama,
		'email' => $email,
		'no_hp' => $no_hp,
		'laporan' => $laporan,
		'status' => $status
	);

	$where = array(
		'id' => $id,
	);

	$this->m_lapor->edit_data_laporan_bencana($where,$data,'lapor_bencana');
	redirect('lapor/data_bencana');
	}




	function edit_laporan_pengungsi($id){

		
		$this->load->view('_partials/header_admin');

		$where = array('id' => $id);
		$data['lapor_pengungsi'] = $this->m_lapor->edit_laporan_pengungsi($where,'lapor_pengungsi')->result();
		$this->load->view('edit_laporan_pengungsi',$data);

		
		$this->load->view('_partials/footer');
	}

	function edit_data_laporan_pengungsi(){

	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$no_hp = $this->input->post('no_hp');
	$laporan = $this->input->post('laporan');
	$status= $this->input->post('status');

	$data = array(
		'id' => $id,
		'nama' => $nama,
		'email' => $email,
		'no_hp' => $no_hp,
		'laporan' => $laporan,
		'status' => $status
		
	);

	$where = array(
		'id' => $id,
	);

	$this->m_lapor->edit_data_laporan_pengungsi($where,$data,'lapor_pengungsi');
	redirect('lapor/data_pengungsi');
	}


	
}

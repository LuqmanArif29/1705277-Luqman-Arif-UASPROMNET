<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_karyawan extends CI_Controller {

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="https://api.akhmad.id/uaspromnet";

			$this->curl->http_header("X-Nim", "1705277");
	}

	// proses yang akan di buka saat pertama masuk ke controller
	public function index()
	{
		$data['user'] = json_decode($this->curl->simple_get($this->API.'/user'));
		$this->load->view('V_karyawan', $data);
	}

	public function tampil_motor()
	{
		$data['motor'] = json_decode($this->curl->simple_get($this->API.'/motor'))->data;
		$this->load->view('v_motor', $data);
	}

	public function tampil_cicil()
	{
		$data['cicil'] = json_decode($this->curl->simple_get($this->API.'/cicil'))->data;
		$this->load->view('v_cicil', $data);
	}


		public function tampil_uang()
		{
			$data['uangmuka'] = json_decode($this->curl->simple_get($this->API.'/uangmuka'))->data;
			$this->load->view('v_uangmuka', $data);
		}

		public function tampil_sales()
		{
			$data['penjualan'] = json_decode($this->curl->simple_get($this->API.'/penjualan'))->data->terjual;
			$this->load->view('v_penjualan', $data);
		}
	// proses untuk menambah data
	// insert data kontak
	// function add(){
	//
	// 	$data = array(
	// 		'id'      =>  $this->input->post('id'),
	// 		'nim'      =>  $this->input->post('nim'),
	// 		'name'    =>  $this->input->post('name'),
	// 		'umur'    =>  $this->input->post('umur'),
	// 		'jenis_kelamin'    =>  $this->input->post('jenis_kelamin'),
	// 		'agama'    =>  $this->input->post('agama'),
	// 		'email'   =>  $this->input->post('email'),
	// 		'address' =>  $this->input->post('address'),
	// 		'phone'   =>  $this->input->post('phone'),
	// 		'jurusan'   =>  $this->input->post('jurusan'),
	// 		'fakultas'   =>  $this->input->post('fakultas'));
	// 	$insert =  $this->curl->simple_post($this->API.'/Karyawan', $data, array(CURLOPT_BUFFERSIZE => 0));
	//
	// 	if($insert)
	// 	{
	// 		$this->session->set_flashdata('hasil','Insert Data Berhasil');
	// 	}else
	// 	{
	// 		$this->session->set_flashdata('hasil','Insert Data Gagal');
	// 	}
	//
	// 	redirect('C_karyawan');
	//
	// }
	//
	//
	// // proses untuk menghapus data pada database
	// function delete($id){
	// 	if(empty($id)){
	// 		redirect('C_karyawan');
	// 	}else{
	// 		$delete =  $this->curl->simple_delete($this->API.'/Karyawan', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
	// 		if($delete)
	// 		{
	// 			$this->session->set_flashdata('hasil','Delete Data Berhasil');
	// 		}else
	// 		{
	// 			$this->session->set_flashdata('hasil','Delete Data Gagal');
	// 		}
	//
	// 		redirect('C_karyawan');
	// 	}
	// }
	//
	// function edit($id){
	// 		$data = array(
	// 			'id'      =>  $this->input->post('id'),
	// 			'nim'      =>  $this->input->post('nim'),
	// 			'name'    =>  $this->input->post('name'),
	// 			'umur'    =>  $this->input->post('umur'),
	// 			'jenis_kelamin'    =>  $this->input->post('jenis_kelamin'),
	// 			'agama'    =>  $this->input->post('agama'),
	// 			'email'   =>  $this->input->post('email'),
	// 			'address' =>  $this->input->post('address'),
	// 			'phone'   =>  $this->input->post('phone'),
	// 			'jurusan'   =>  $this->input->post('jurusan'),
	// 			'fakultas'   =>  $this->input->post('fakultas'));
	// 		$edit =  $this->curl->simple_put($this->API.'/Karyawan', $data, array(CURLOPT_BUFFERSIZE => 0));
	// 		if($edit)
	// 		{
	// 			$this->session->set_flashdata('hasil','Edit Data Berhasil');
	// 		}else
	// 		{
	// 			$this->session->set_flashdata('hasil','Edit Data Gagal');
	// 		}
	//
	// 		redirect('C_karyawan');
	//
	// }

	//TUGAS : bikin fungsi update di client menggunakan service
	//
	//
}

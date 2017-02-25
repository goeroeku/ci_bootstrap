<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_siswa');
	}
	function index()
	{
		$data['siswa'] = $this->m_siswa->show();
		$this->load->view('siswa/index.php', $data);
	}
	function add(){
		$this->load->view('siswa/form.php');
	}
	function save(){
		$kirim = $this->input->post('kirim');
		if(isset($kirim)){
			$data = array(
				"nisn" => $this->input->post('nisn'),
				"nama" => $this->input->post('nama'),
				"kelas" => $this->input->post('kelas')
			);
			$id = $this->input->post('old_id');
			if(!isset($id) || $id == NULL){
				$this->m_siswa->add($data);
			}else{
				$this->m_siswa->edit($data, $id);
			}
		}
		redirect('siswa');
	}
	function del($id){
		if(isset($id)){
			$this->m_siswa->del($id);
		}
		redirect('siswa');
	}
	function edit($id =FALSE){
		if($id == FALSE){
			redirect('siswa');
		}
		$data['siswa'] = $this->m_siswa->show($id);
		$this->load->view('siswa/form.php', $data);
	}
}

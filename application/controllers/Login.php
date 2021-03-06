<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->form_validation->set_rules('username','Username','required',
			array(	'required' => '%s Harus di isi'));

		$this->form_validation->set_rules('password','Password','required',
			array(	'required' => '%s Harus di isi'));

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->simple_login->login($username,$password);
		}

		$data = array('title' => 'Login Administrator');
		$this->load->view('login/list', $data, FALSE);
	}

	public function logout(){
		$this->simple_login->logout();
	}

}

?>
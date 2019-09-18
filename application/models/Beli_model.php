<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beli_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	// listing all user
	public function listing(){
		$this->db->select('*');
		$this->db->from('beli');
		$this->db->order_by('id_beli', 'desc');
		$query = $this->db->get();
		return $query->result();	
	}
	// Detail user
	public function detail($id_beli){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id_beli', $id_beli );
		$this->db->order_by('id_beli', 'desc');
		$query = $this->db->get();
		return $query->row();	
	}
	public function tambah($data){
		$this->db->insert('beli',$data);
	}
	// edit
	public function edit($data){
		$this->db->where('id_beli', $data['id_beli']);
		$this->db->update('beli',$data);
	}
	// delete
	public function delete($data){
		$this->db->where('id_beli', $data['id_beli']);
		$this->db->delete('beli',$data);
	}
}
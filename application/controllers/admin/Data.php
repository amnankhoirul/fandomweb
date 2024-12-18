<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	public function index()
	{	
		$this->db->from('data');
		$data1 = $this->db->get()->result_array();
		$data = array(
			'data' => $data1
		);
		$this->load->view('admin/data', $data); // Pass the $data array	
		
	}
	
	

	public function save(){
		$data = array(
			'name_data' => $this->upload_file('name_data'),
			'type_data' => $this->upload_file('type_data'),
			'position_data' => $this->upload_file('position_data'),
			'background_data' => $this->upload_file('background_data'),
			'intro_data' => $this->upload_file('intro_data'),
			'va_data' => $this->upload_file('va_data'),
			'char_data' => $this->upload_file('char_data'),
			'number_data' => $this->upload_file('number_data'),
			'profile_data' => $this->upload_file('profile_data'),
		);
		$this->db->insert('data', $data);
	}
	
	private function upload_file($field_name) {
		$config['upload_path'] = './uploads/'; // Set the upload directory
		$config['allowed_types'] = 'jpg|png|jpeg'; // Allowed file types
		$config['max_size'] = 2048; // Max file size in KB
	
		$this->load->library('upload', $config);
	
		if ($this->upload->do_upload($field_name)) {
			return $this->upload->data('file_name');
		} else {
			return null; // Return null if file upload fails
		}
	}
}	


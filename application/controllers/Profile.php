<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
		// $this->load->view('admin/home');
		$this->load->view('profile-edit');
		
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		// $this->load->view('admin/home');
		$this->template->load('admin/home','admin/dashboard');
		
	}
}

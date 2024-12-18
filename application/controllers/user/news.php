<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	public function index()
	{
		$this->load->view('user/news');
		// $this->template->load('user/home');
		
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    public function index() {    
        $this->db->from('event');
        $event1 = $this->db->get()->result_array();
        $data = array(
            'event' => $event1
        );
        $this->load->view('admin/news', $data); // Pass the $data array    
    }

    public function save() {
        // Validate and process form input
        $title_news   = $this->input->post('title_news', true);
        $cat_news     = $this->input->post('cat_news', true);
        $status_news  = $this->input->post('status_news', true);
        $desc_news    = $this->input->post('desc_news', true);
        $date_news    = $this->input->post('date_news', true);
        
        // Handle file upload for 'image_news'
        $image_news = $this->upload_file('image_news'); // Call private method to handle file upload
        
        // Prepare data for the database
        $data = array(
            'title_news'   => $title_news,
            'cat_news'     => $cat_news,
            'status_news'  => $status_news,
            'desc_news'    => $desc_news,
            'date_news'    => $date_news,
            'image_news'   => $image_news // This will be NULL if file upload fails
        );

        // Insert into 'event' table
        if ($this->db->insert('event', $data)) {
            // Success message
            $this->session->set_flashdata('success', 'News saved successfully!');
        } else {
            // Failure message
            $this->session->set_flashdata('error', 'Failed to save news. Please try again.');
        }

        // Redirect back to the form
        redirect('admin/news');
    }

    // Private method for file upload
	private function upload_file($field_name) {
		$config['upload_path']   = 'assets/news'; // Directory to save uploaded files
		$config['allowed_types'] = 'jpg|png|jpeg'; // Allowed file types
		$config['max_size']      = 2048; // Max file size in KB
	
		$this->load->library('upload', $config); // Load the upload library
	
		if ($this->upload->do_upload($field_name)) {
			return $this->upload->data('file_name'); // Return the uploaded file name
		} else {
			// Debug the error message if upload fails
			echo $this->upload->display_errors('<p>', '</p>');
			return null; // Return NULL if file upload fails
		}
	}
	
}

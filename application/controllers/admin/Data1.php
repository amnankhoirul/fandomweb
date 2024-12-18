<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data1 extends CI_Controller {

    public function index() {    
        $this->db->from('data');
        $data1 = $this->db->get()->result_array();
        $data = array(
            'data' => $data1
        );
        $this->load->view('admin/data1', $data); // Pass the $data array    
    }

    public function save() {
        $data = array(
            'background_data' => $this->upload_file('background_data'),
            'char_data' => $this->upload_file('char_data'),
            'intro_data' => $this->upload_file('intro_data'),
            'position_data' => $this->upload_file('position_data'),
            'type_data' => $this->upload_file('type_data'),
            'cv_data' => $this->upload_file('cv_data'),
            'name_data' => $this->upload_file('name_data'),
            'number_data' => $this->upload_file('number_data'),
        );
        
        log_message('debug', 'POST Data: ' . print_r($_POST, true));
        log_message('debug', 'FILES Data: ' . print_r($_FILES, true));
        log_message('debug', 'Data Array: ' . print_r($data, true));
    
        if (array_filter($data)) {
            $this->db->insert('data', $data);
            $this->session->set_flashdata('success', 'Data successfully saved!');
        } else {
            $this->session->set_flashdata('error', 'File upload failed. Please try again.');
        }
    
        redirect('admin/data');
    }
    
    private function upload_file($field_name) {
        // Set upload configuration
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 10000; // Max file size in KB
        $config['encrypt_name'] = TRUE;
    
        $this->load->library('upload', $config);
    
        // Perform the file upload
        if ($this->upload->do_upload($field_name)) {
            $upload_data = $this->upload->data(); // Get upload data
            return 'uploads/' . $upload_data['file_name']; // Save relative path
        } else {
            log_message('error', $this->upload->display_errors());
            return null;
        }
    }
}

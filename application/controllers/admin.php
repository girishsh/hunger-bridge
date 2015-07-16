<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
	    $this->load->helper('url');
	    $this->load->model('admin_model');
 	}

	public function index() {
		$this->load->view('admin/login');
	}

	public function login() {
		$results = $this->admin_model->validate();
		if($results) {
			$this->load->view('admin/dashboard');
		} else{
			redirect('/admin');
		}
		print_r($results);
		echo "Hello";
		exit;
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['title'] 	= 'Codeigniter 3.1.10 & Bootstrap 4.3.1 | LiNuXiToS';
		$data['tab'] 	= 'index';
		$this->load->view('common/head', $data);
		$this->load->view('common/navbar', $data);
		$this->load->view('welcome_message');
		$this->load->view('common/foot', $data);
	}
}

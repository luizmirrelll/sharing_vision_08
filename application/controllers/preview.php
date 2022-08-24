<?php


defined('BASEPATH') OR exit ('No direct script access allowed');


/**
* 
*/
class Preview extends CI_Controller
{
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD');
		}

		function index()
		{
			$data['judul'] = 'All Posts';
			$data['data'] = $this->CRUD->loadPost();
			$this->load->view('Templates/Header', $data);
			$this->load->view('Templates/Sidebar');
			$this->load->view('Menu/Preview');
			$this->load->view('Templates/Footer');
		}
}

?>
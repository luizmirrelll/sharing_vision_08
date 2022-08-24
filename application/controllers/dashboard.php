<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('CRUD'));
    }

    function index()
    {
        $data['judul'] = 'All Posts';
        $data['data'] = $this->CRUD->loadPost();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Dashboard/dashboard');
        $this->load->view('Templates/Footer');
    }
}
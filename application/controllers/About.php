<?php


class About extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/about');

        $this->load->view('templates/footer');
    }
}
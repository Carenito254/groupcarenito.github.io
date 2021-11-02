<?php


class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(array('MessagesModel' =>'msg','LayoutModel' =>'lm'));
    }

    function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/contact',array('feedback' => array()));

        $this->load->view('templates/footer');
    }


    function send_message(){
        $st = $this-> msg-> sendMessage();

        $msg = 'Message send! we\'ll get back to you as soon as possible';

        $this->load->view('templates/header');
        $this->load->view('pages/contact',array('feedback' => array()));

        $this->load->view('templates/footer');
    }

}
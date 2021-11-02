<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(array('MessagesModel' =>'msg','LayoutModel' =>'lm'));
    }


    function contact(){
        $st = $this-> msg-> sendMessage();

        $msg = 'Message send! we\'ll get back to you as soon as possible';
        /*todo:implement an ajax submission on the client side */
        $this -> lm -> www();
        $this -> load -> view('www/pages/contacts',array('feedback' => array($msg)));
        $this -> lm-> close_www();
    }
}
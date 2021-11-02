<?php


class LayoutModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
       /* $this ->load -> model(
            array(
                'ServiceModel' => 'service'
            )
        );*/
    }

    function www(){
        $this -> load -> view('www/layout/header');
        $this -> load -> view ('www/layout/navigation');
    }

    function close_www(){

       // $services = $this -> service -> getAllServices(true);
        $this -> load -> view ('www/layout/footer',array('services' => array()));
    }

    function a_open(){

        $this ->load ->view('admin/layout/header');
        $this -> load -> view('admin/layout/navigation');
        $this -> load -> view ('admin/layout/top_bar');
    }

    function a_close(){
        $this -> load -> view('admin/layout/footer');
    }



}
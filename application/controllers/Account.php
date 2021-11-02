
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url','form'));
        $this->load->library('form_validation');
        $this ->load -> model('AuthenticationModel');
        $this -> load -> model('LayoutModel');
        $this ->load ->model('UsersModel');


    }

    function index(){

        if($this->AuthenticationModel->checkIfUserIsLoggedIn()){
            redirect(base_url());
        }else{

            $this->load->view('account/sign_in');
        }

    }

    function sign_in(){

        $this->load->view('account/sign_in');
    }

    function sign_up(){
        $this->load->view('account/sign_up');
    }

    function login(){

        $is_login =  $this -> AuthenticationModel -> login();

        // var_dump($is_login);
        if($is_login){
            redirect(base_url());
        }else{
            //$_SESSION['auth_error'] = 'Failed';
            redirect('account/');

        }

    }

    function log_out(){
        $this -> AuthenticationModel-> logOut();

        redirect(base_url());
    }

    function showProfile($id){
        $this->LayoutModel->a_open();
        $this ->load ->view('account/admin/profile',
            array(
                'user' => $this -> UsersModel-> getUserById($id)
            ));
        $this ->load -> view('layout/footer');
    }

    function register (){
        if ($this -> UsersModel -> register()){
            $_SESSION['positive'] = 'Account Registered successfully';
            redirect('admin/add');
        }else{
            $_SESSION['negative'] = 'Failed to register. Account has not been created';
            redirect('admin/add');
        }
    }

    function user_profile($id = null){
        if(!isset($id)){ $id = $this -> session -> user_id;}
        $this->LayoutModel->u_open();
        $this ->load ->view('layout/user/template',
            array(
                'user' => $this -> UsersModel-> getUserById($id)
            )
        );
        $this ->load -> view('layout/footer');

    }

    function change_password(){

        if($this -> UsersModel -> change_my_password()){
            $_SESSION['positive'] = 'password changed';

            /*log out user due to change in session terms*/
            $this -> AuthenticationModel -> logOut();

            redirect(base_url());

        }else{
            redirect('account/user_profile/');
        }
    }

    function change_username(){

        if($this -> UsersModel ->change_my_username()){
            $_SESSION['positive'] ='username changed!';
            /*log out user due to change in session terms*/
            $this -> AuthenticationModel -> logOut();

            redirect(base_url());
        }else{
            $_SESSION['negative'] = 'something went wrong username has not been changed';
            redirect('account/user_profile/'.$this->session->user_id);
        }
    }

    function change_email(){
        if($this -> UsersModel -> change_my_email()){
            $_SESSION['positive'] = ' email changed';
            redirect('account/user_profile/'.$this->session->user_id);
        }else{
            $_SESSION['negative'] = 'something went wrong email has not been changed';

            redirect('account/user_profile/'.$this->session->user_id);
        }
    }

    function reset_password(){
        if($this -> UsersModel -> forgot_password_reset ()){

            $_SESSION['positive'] ='password reset success';

            session_destroy();
            redirect(base_url());
        }else{

            echo 'false';
        }
    }
    function forgot_password(){
        $this ->load->view('account/reset_password');

    }
}
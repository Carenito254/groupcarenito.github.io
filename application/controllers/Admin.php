<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(array('AuthenticationModel'=>'Auth', 'BlogModel'=>'blog'));
        /*check for admin authentication*/
        if (!$this->Auth->checkIfUserIsLoggedIn()) {
            redirect('account/');
            // to prevent fetching views via cURL (which "ignores" the header-redirect above) we leave the application
            exit();
        } else {
            if ($this->session->user_account_type != 7) {
                redirect(base_url());
            }
        }

        $this->load->helper(array(
            'url', 'html'
        ));
        $this->load->model(array(
            'LayoutModel'=>'lm',
            'UsersModel'=>'Users',
            'StatisticsModel' =>'stat',
            'MessagesModel' =>'msg',
        ));


        /*load number of unread messages */
        unset(   $this -> session -> ms_count);
        $this -> session -> ms_count = $this->stat ->NewMessageCount();
        unset(   $this -> session -> msr_count);
        $this -> session -> msr_count = $this->stat ->messageCount();
    }

    function index()
    {
        $this->lm->a_open();
        $this->load->view('admin/pages/dashboard');
        $this->lm->a_close();
    }


    function new_blog()
    {
        $this->lm->a_open();
        $this->load->view('admin/pages/new_blog', array(
            'st' => array(''),
            'categories' => $this->blog->getBlogCategories()
        ));
        $this->lm->a_close();
    }

    function blog_categories()
    {
        $this->lm->a_open();
        $this->load->view('admin/pages/blog_categories',array(
            'categories' => $this->blog->getBlogCategories()

        ));
        $this->lm->a_close();

    }

    function users()
    {
        $this->lm->a_open();
        $this->load->view('account/admin/users',
            array(
                'users' => $this->Users->getUsers()
            ));
        $this->load->view('layout/footer');
    }

    function add()
    {
        $this->lm->a_open();
        $this->load->view('account/admin/register_user');
        $this->load->view('layout/footer');
    }

    function register()
    {
        if ($this->Users->register()) {
            $_SESSION['positive'] = 'Account Registered successfully';
            redirect('admin/add');
        } else {
            $_SESSION['negative'] = 'Failed to register. Account has not been created';
            redirect('admin/add');
        }
    }

    function activate_user($id)
    {
        if ($this->Users->activateUser($id)) {
            $_SESSION['positive'] = 'user is now active';

            redirect('admin/users');
        }
    }

    function delete_user($id)
    {
        if ($this->Users->deleteUser($id)) {
            $_SESSION['positive'] = 'user deleted';
            redirect('admin/users');
        }
    }

    function inbox ()
    {
        /*get messages */
        $ms = $this -> msg -> getNewMessages();
        /*display view*/
        $this->lm->a_open();
        /*pass data*/
        $this->load->view('admin/pages/inbox' , array('ms' => $ms));
        $this->load->view('admin/layout/footer');
    }


    function  read($msg_id){
        /*get messages */
        $ms = $this -> msg -> getMessageById($msg_id);
        /*display view*/
        $this->lm->a_open();
        /*pass data*/
        $this->load->view('admin/pages/read_message' , array('ms' => $ms));
        $this->load->view('admin/layout/footer');

    }

    function  old_messages(){
        /*get messages */
        $ms = $this -> msg -> getReadMessages();
        /*display view*/
        $this->lm->a_open();
        /*pass data*/
        $this->load->view('admin/pages/read_msg' , array('ms' => $ms));
        $this->load->view('admin/layout/footer');

    }

    function register_blog()
    {
        $st =$this->blog->registerBlog();
        /*display view*/
        $this->lm->a_open();
        /*pass data*/
        $this->load->view('admin/pages/new_blog' , array('st' =>array($st[1]),'categories' => $this->blog->getBlogCategories()));
        $this->load->view('admin/layout/footer');
    }

    function blog_manager(){
        $blogs =$this->blog->getAllBlogPost();
        /*display view*/
        $this->lm->a_open();
        /*pass data*/
        $this->load->view('admin/pages/blog_manager' ,array ('blogs' => $blogs,'categories' => $this->blog->getBlogCategories()));
        $this->load->view('admin/layout/footer');
    }


    function client_request(){

        $request = $this -> applicant -> getApplicantRequest();
        $this->lm->a_open();
        /*pass data*/
        $this->load->view('admin/pages/applicant' ,array ('requests' => $request));
        $this->load->view('admin/layout/footer');

    }

    function request_view($id)
    {
        $application = $this -> applicant -> getApplicationById($id);

        /*get the service via service is i.e the app type*/
        $service = $this -> service -> getServiceById($application[0] -> app_type);



        $this->lm->a_open();
        /*pass data*/
        $this->load->view('admin/pages/application_view',array('application' =>$application,'service' =>$service));
        $this->load->view('admin/layout/footer');

    }

}
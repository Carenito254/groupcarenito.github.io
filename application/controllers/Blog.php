<?php


class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this-> load -> model(array(
            'BlogModel' =>'blog',
             'LayoutModel'=>'lm',
        ));
    }

    function index(){
        $blogs= $this -> blog -> getAllBlogPost();
        $blog_categories = $this -> blog -> getBlogCategories();
        $this->load->view('templates/header');
        $this->load->view('pages/blog',array('blog_posts' => $blogs, 'blog_categories' => $blog_categories));

        $this->load->view('templates/footer');
    }

    function  add_category(){

        if($this -> blog->addBlogCategory()){
            redirect('admin/new_blog');
        }
    }

    function blog_post(){
        $blogs= $this -> blog -> getAllBlogPost();
        $blog_categories = $this -> blog -> getBlogCategories();
        $this -> lm -> www();
        $this -> load -> view('www/pages/blog',array('blog_posts' => $blogs, 'blog_categories' => $blog_categories));
        $this -> lm -> close_www();
    }

}
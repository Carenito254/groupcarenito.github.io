<?php


class BlogModel extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function addBlogCategory()
    {
        $data = array(
            'cat_title' => $_POST['cat_title']
        );

        return $this->db->insert('gk_blog_categories', $data);
    }

    function getBlogCategories()
    {
        $qr = $this->db->get('gk_blog_categories');

        return $qr->result();
    }

    function registerBlog()
    {

        $data = $this->blogCoverUpload();

        if (!is_null($data[0])) {

            $blog_data = array(
                'blog_title' => $_POST['blog_title'],
                'blog_category_id' => $_POST['blog_category_id'],
                'blog_visibility' => 0,
                'blog_author' => $_POST['blog_author'],
                'blog_content' => $_POST['blog_content'],
                'blog_image_url' => $this->blogImageUrl($data[1]),
                'blog_cover_data' => json_encode($data[1])
            );

            /*write data to db*/

            $this->db->insert('gk_blog', $blog_data);
            return array(true,'blog updated! but still not visible in the web.');
        } else {
            return array(false,$data[1]);
        }
    }

    function blogCoverUpload()
    {


        $config['upload_path'] = './uploads/blog';
        $config['allowed_types'] = 'gif|jpg|png|wav|ogg|mp4|m4p|m4v|avi|mov|flv|webm|mpg|mpg|wmv';
        $config['max_size'] = 10000000;


        $this->load->library('upload', $config);
        $this -> upload -> initialize($config);
        $this -> upload -> set_allowed_types ('*');

        if (!$this->upload->do_upload('blog_cover')) {
            $error = array('error' => $this->upload->display_errors());

            return array(null,$error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            return array(true,$data);
        }
    }

    function blogImageUrl($data)
    {
        return $data['upload_data']['full_path'];
    }

    function getAllBlogPost()
    {
        $this-> db -> order_by('blog_id','DESC');
        $qr = $this->db -> get('gk_blog');


        return $qr -> result();

    }


}
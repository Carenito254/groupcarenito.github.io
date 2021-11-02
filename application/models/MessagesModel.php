<?php
class MessagesModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this ->load ->database();
    }


    function sendMessage()
    {
        /*todo:do data validation*/
       $data = array(
           'sender_name' => $_POST['sender_name'],
           'email' => $_POST['email'],
           'phone' => $_POST['phone'],
           'message' => $_POST['message'],

       );

       $this->db -> insert('gk_message',$data);

       return true;
    }


    function  getNewMessages(){
        $this -> db -> where('mark_as_read',0);
        $this ->db -> order_by('send_on','DESC');
        $qr =$this -> db -> get ('gk_message');

        return $qr -> result();
    }
    function  getReadMessages(){
        $this -> db -> where('mark_as_read',1);
        $this ->db -> order_by('send_on','DESC');
        $qr =$this -> db -> get ('gk_message');

        return $qr -> result();
    }

    function getMessageById($msg_id){

        /*update as read*/
        $this ->markAsRead($msg_id);

        $this -> db -> where('message_id',$msg_id);
        $this ->db -> select(array('message','sender_name','email','send_on'));

        $qr =$this -> db -> get ('gk_message');

        return $qr -> result();
    }

    function markAsRead($msg_id):void{

        $this -> db -> where ('message_id',$msg_id);
        $this ->db -> update ('gk_message',array('mark_as_read'=>1));

    }

}
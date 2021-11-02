<?php


class UsersModel extends  CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this -> load-> database();
    }


    function get_if_user_exists_by_user_name($user_name){

        $this ->db -> where('user_name',$user_name);
        $get_user = $this ->db ->get('users');

        if($get_user)
        {
            return $get_user -> result_array();
        }   else{
            return false;//user does not exist:
        }
    }

    function getUsers()
    {
        $qr = $this -> db -> get('users');

        return $qr ->result();
    }

    function getUserById($user_id)
    {
        $this->db->where('user_id',$user_id);
        $qr = $this -> db -> get('users');

        $qr =  $qr ->result();

        return $qr[0];

    }

    function updateUser($user_id){
        $data = array(
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'user_name' => $_POST['user_name']
        );
        $this -> db -> where('user_id',$user_id);
       return $this -> db -> update();
    }

    function deleteUser($user_id){

        $this-> db -> where('user_id',$user_id);
        return $this ->db -> delete('users');

    }

    function  register(){
        // clean the input
        $user_name = strip_tags($_POST['user_name']);
        $user_email = strip_tags($_POST['user_email']);
        $user_password_new = $_POST['user_password_new'];
        $user_password_repeat = $_POST['user_password_repeat'];

        /*validations*/
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if ($user_password_new !== $user_password_repeat) {
            return false;
        }

        /*who is doing the registration? admin?*/

        if(isset($_SESSION['user_account_type'])){
            if($_SESSION['user_account_type'] == 7){
                $user_is_active = 1;
            }
        }else{
            $user_is_active = 0;
        }

        /*write user to database*/
        $user = array(
                    'user_name' => $user_name,
                    'user_password_hash' => password_hash($user_password_new, PASSWORD_DEFAULT),
                    'user_email' => $user_email,
                    'user_active' => $user_is_active,
                    'user_creation_timestamp' => time(),
                    'user_activation_hash' => sha1(uniqid(mt_rand(), true)),
                    'user_provider_type' => 'DEFAULT'
        );

        return $this ->db->insert ('users',$user);

    }

    function activateUser($user_id){
        $this -> db -> where('user_id', $user_id);
         return $this->db -> update('users',array('user_active' => 1));
    }

    function change_my_password(){
        $user_password_old = $_POST['user_password_current'];
        $user_password_new = $_POST['user_password_new'];
        $user_password_repeat = $_POST['user_password_repeat'];

        /*check if user password new == to user password repeat*/
        if($user_password_new != $user_password_repeat){
             return false;
        }

        /*get the current user password hash stored in the database*/
        $curent_user = $this ->session -> user_id;

        $this ->db -> select('user_password_hash');
        $this->db-> where('user_id' ,$curent_user);

        $qr = $this -> db -> get('users');

        $result = $qr -> result();
        $user_hash = $result[0]->user_password_hash;

        //var_dump($user_hash);
        /*verify hash */
        if(!password_verify($user_password_old,$user_hash)){
            $_SESSION['negative'] = 'the old password is not correct';
            return false;
        }

        /*now set the new password in db*/

        $this->db ->where('user_id',$curent_user);
        return $this ->db -> update('users',array('user_password_hash' => password_hash($user_password_new,PASSWORD_DEFAULT)));


    }

    function change_my_username(){

        $this -> db -> where('user_id',$this->session->user_id);

       return $this -> db -> update ('users', array('user_name' => $_POST['user_name']));
    }

    function change_my_email(){
        $this -> db -> where('user_id' ,$this -> session-> user_id);
        return $this -> db -> update ('users', array('user_email' => $_POST['user_email']));

    }


    function forgot_password_reset (){
        $user_name = $_POST['user_name'];

        /*check if a user exists by this user name*/

        $user = $this ->get_if_user_exists_by_user_name($user_name);


        $user = !empty($user)? $user : true;


         if(is_bool($user)){
             $_SESSION['negative'] = 'A user does not exit with the username you provided';
             return false;
         }
        $get_new_password = $_POST['user_password_new'];
        $get_new_password_repeat = $_POST['user_password_repeat'];

        if($get_new_password != $get_new_password_repeat){
            $_SESSION['negative'] = 'passwords do not match!';

            return false;
        }

        /*now update the password*/
        $user_id = $user[0]['user_id'];


        $this -> db -> where('user_id', $user_id);

        return $this -> db -> update('users',array('user_password_hash'=> password_hash($get_new_password,PASSWORD_DEFAULT)));

    }


}
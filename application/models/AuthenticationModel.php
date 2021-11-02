<?php


class AuthenticationModel extends CI_Model
{

    function __construct()
    {
        $this-> load -> database();
        $this -> load -> library('session');
    }

    function login(){

        $login_form = array(
            'user_name' => $_POST['user_name'],
            'user_password' => $_POST['user_password']
        );

        /*get the user by user_name: stop process if user does not exists*/
        $this -> load ->model('UsersModel');
        $user= $this ->UsersModel -> get_if_user_exists_by_user_name($login_form['user_name']);

        $user = !empty($user)? $user :true;
        //var_dump($user[0]['user_password_hash']);

        if(is_bool($user)){
            /*user does not exists*/
            $_SESSION['auth_error'] = 'Incorrect Username or password. Try again!';
            /*finally user not logged in */
            return false;
        }else{
            /*get the user password*/
              $password = $user [0]['user_password_hash'];

              echo 'here';
            /*now perform the password verification*/

             $verified =$this ->passwordVerification($login_form['user_password'],$password);

             if($verified){
                 /*set session variables*/
               if($user [0]['user_active'] == 0 ){

                   $_SESSION ['auth_error'] = 'You account is inactive: Contact admin for activation';
                   return false;
               }
              $this->set_session_vars($user[0]);

                /*finally user is logged in */

                return true;
            }else{
                 $_SESSION['auth_error'] = 'Incorrect Username or password. Try again!';
                 /*finally user not logged in */
                 return false;
             }
        }
    }

    function passwordVerification($form_password,$db_password){

        $verified = password_verify($form_password,$db_password);
        return $verified;
    }

    function logOut(){

        $this->updateSessionId($_SESSION['user_id']);
        /*unset the session vars*/
        $this->session ->unset_userdata(array('user_id','user_name','user_email','user_account_type','user_id'));

        /*destroy the session*/
        $this->session->sess_destroy();

        /*todo:redirect to the login page*/
    }


    function set_session_vars($user_data){

        session_regenerate_id(true);

        $_SESSION = array();

        $user_data = array(
            'user_id' => $user_data['user_id'],
            'user_name'=> $user_data['user_name'],
            'user_email' =>$user_data['user_email'],
            'user_account_type' => $user_data['user_account_type']);

        /*now set the loggin state to true*/

        $this ->session->set_userdata($user_data);

        /*update the session id in db*/
        $this ->updateSessionId($user_data['user_id'],session_id());

        $_SESSION['user_is_logged_in'] = 'true';
    }


    function checkIfUserIsLoggedIn()
    {

        return isset($_SESSION['user_is_logged_in'])? true : false ;
    }


    function checkIfValidSessionExists()
    {
        /*todo: check if the current session matches with the one stored in the database */

        
    }

    function updateSessionId($user_id,$session_id = null){
        /*update the session id in db*/
        $this ->db ->where ('user_id',$user_id);
        $this ->db -> update('users',array('session_id' =>$session_id));
    }
    /**
     * checks for session concurrency
     *
     * This is done as the following:
     * UserA logs in with his session id('123') and it will be stored in the database.
     * Then, UserB logs in also using the same email and password of UserA from another PC,
     * and also store the session id('456') in the database
     *
     * Now, Whenever UserA performs any action,
     * You then check the session_id() against the last one stored in the database('456'),
     * If they don't match then log both of them out.
     *
     * @access public
     * @static static method
     * @return bool
     * @see Session::updateSessionId()
     * @see http://stackoverflow.com/questions/6126285/php-stop-concurrent-user-logins
     */
    function isConcurrentSessionExists(){
        $session_id = session_id();
        $userId     = $this -> session -> user_id;

        if (isset($userId) && isset($session_id)) {
            $this ->db -> where ('user_id', $userId);
            $qr = $this -> db -> get('users');

            $qr = $qr ->result();

            $userSessionId = !empty($qr)? $qr->session_id: null;

            return ($session_id !== $userSessionId)? false:true;
        }

        return false;
    }
}
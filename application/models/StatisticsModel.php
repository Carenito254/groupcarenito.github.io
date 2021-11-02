<?php


class StatisticsModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    public function newMessageCount()
    {
        /*where not marked as read*/
         $this-> db -> where ('mark_as_read',0);
         return $this -> db -> count_all_results ('gk_message');
    }
    public function messageCount()
    {
        /*where not marked as read*/
        $this-> db -> where ('mark_as_read',1);
        return $this -> db -> count_all_results ('gk_message');
    }



}
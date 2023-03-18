<?php


class history extends CI_Controller 
{
    public function __construct() 
    {
        parent ::__construct();

    }


    public function messagehistory() {

        $this->db->select('message , message_date');
        $this->db->from('messages');
        $this->db->where('user_id', $_SESSION['userid']);
        $query = $this->db->get();
        $data['messages']= $query->result_array();
        
        $this->load->view("messagehistory",$data);
    }
    

}

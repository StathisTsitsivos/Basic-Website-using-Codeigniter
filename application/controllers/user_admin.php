<?php


class User_admin extends CI_Controller 
{
    

    public function __construct() 
    {
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {            
            $this->session->set_flashdata("error", "Please login first to view this page!! ");
            redirect("auth/login");

        }


    }
    public function profile_admin() 
    {
        if ($_SESSION['user_logged'] == FALSE) {            
            $this->session->set_flashdata("error", "Please login first to view this page!! ");
            redirect("auth/login");

        }
        
        
        $this->load->view('profile_admin');
    }


}
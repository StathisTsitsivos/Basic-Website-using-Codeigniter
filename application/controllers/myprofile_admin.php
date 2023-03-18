<?php


class myprofile_admin extends CI_Controller 
{
    public function __construct() 
    {
        parent ::__construct();

    }


    public function update_admin() 
    {
            $this-> form_validation->set_rules('username','Name','required');
            $this-> form_validation->set_rules('lastname','Last Name','required');
            $this-> form_validation->set_rules('email','Email','required');
            $this-> form_validation->set_rules('password','Password','required|min_length[8]');
            
            if ($this->form_validation->run() == TRUE) {
                 $data = array(
                     'user_id'=> $_SESSION['userid'],
                     'name'=> $_POST['username'],
                     'lastName' => $_POST['lastname'],
                     'email'=> $_POST['email'],
                     'password'=>md5($_POST['password'])
                 );

                
                $this->db->replace('users',$data);
                $this->session->set_flashdata("success", "Your account has been updated");
                redirect("myprofile_admin/update_admin", "refresh");
            }
        
        $this->load->view("update_admin");
    }
}
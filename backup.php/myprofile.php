<?php


class myprofile extends CI_Controller 
{
    public function __construct() 
    {
        parent ::__construct();

    }


    public function update() 
    {
        if (isset($_POST['update'])) {

            $this-> form_validation->set_rules('username','Name','required');
            $this-> form_validation->set_rules('username2','Last Name','required');
            $this-> form_validation->set_rules('email','Email','required');
            $this-> form_validation->set_rules('password','Password','required|min_length[8]');
         

            if ($this->form_validation->run() == TRUE) {

                $data = array(
                    'name'=> $_POST['eusername'],
                    'lastName' => $_POST['eusername2'],
                    'email'=> $_POST['eemail'],
                    'password'=>md5($_POST['epassword'])
                );
                
                $this->db->replace('users',$data);
                $this->session->set_flashdata("success", "Your account has been updated");
                redirect("myprofile/update", "refresh");
            }
        }
        $this->load->view("update");
    }
    
}

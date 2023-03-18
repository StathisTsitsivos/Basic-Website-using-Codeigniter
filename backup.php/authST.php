<?php

class Auth extends CI_Controller 
{
    public function lost_pass() {

        
        
        $this->load->view("lost_pass");
    }
    


    public function logout() {

        unset($_SESSION);
        session_destroy();
        redirect("auth/login", "refresh");

    }

   

    public function login() 
    {
        

        $this-> form_validation->set_rules('email','email','required');
        $this-> form_validation->set_rules('password','Password','required|min_length[8]');
        if ($this->form_validation->run() == TRUE) {

          $email=$_POST['email'];
          $password = md5($_POST['password']); 

          $this->db->select('*');
          $this->db->from('users');
          $this->db->where(array('email' => $email, 'password' => $password));
          $query = $this->db->get();

          $user = $query->row();
            //$user = $this->db->get_where('users', array('email' => $email, 'password' => $password))->num_rows();

          if($user-> email)  {

                $this->session->set_flashdata("success", "You are logged in");

                $_SESSION['user_logged']= TRUE;
                $_SESSION['email']= $user->email;

                redirect("user/profile", "refresh");
            
          } else {

                //$this->session->set_flashdata('login_failed', 'Invalid username or password');
                //$this->load->view('login');

                $this->session->set_flashdata("error", "NO such account exists in database");
                
                redirect("auth/login","refresh");
          }

           

 
        } 

        $this->load->view('login');


    }

    

    public function register() 
    {
        if (isset($_POST['register'])) {
            $this-> form_validation->set_rules('username','Name','required');
            $this-> form_validation->set_rules('username2','Last Name','required');
            $this-> form_validation->set_rules('email','Email','required');
            $this-> form_validation->set_rules('password','Password','required|min_length[8]');
            $this-> form_validation->set_rules('password','Retype Pass','required|min_length[8]|matches[password]');

            if ($this->form_validation->run() == TRUE) {
                //echo 'from validated';

                // add data
                $data = array(
                    'name'=> $_POST['username'],
                    'lastName' => $_POST['username2'],
                    'email'=> $_POST['email'],
                    'password'=>md5($_POST['password'])
                );
                $this->db->insert('users', $data);

                $this->session->set_flashdata("success", "Your account has been registered. You can login now");
                redirect("auth/register", "refresh");
            }
        }

        // load view
        $this->load->view('register');
    }


}

   

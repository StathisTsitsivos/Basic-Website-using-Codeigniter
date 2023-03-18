<?php

class Auth extends CI_Controller 
{

    

    public function index() {
        // If the user is already logged in, redirect them to the dashboard
        
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }
        
        // Load the login view
        $this->load->view('login');
    }

    public function login() 
    {
        $this->load->library('form_validation');
        
        $this-> form_validation->set_rules('email','email','required');
        $this-> form_validation->set_rules('password','Password','required|min_length[8]');
        if ($this->form_validation->run() == TRUE) {

            $email=$_POST['email'];
            $password = md5($_POST['password']); 

            $user = $this->db->get_where('users', array('email' => $email, 'password' => $password))->num_rows();

            if($user == 1)   {
                session_start();
                $this->db->select('user_id');
                $this->db->from('users');
                $this->db->where('email', $email);
                $query = $this->db->get();
                $row =$query->row_array();
                $user_id = $row['user_id'];
                $this->session->set_flashdata("success", "You are logged in");

                $_SESSION['user_logged']= TRUE;
                $_SESSION['userid']= $user_id;

                redirect("user/profile", "refresh");
            
            } else {

                $this->session->set_flashdata('error_msg', 'Invalid email or password');
                $this->load->view('login');
            }
    }
    else {

        $this->session->set_flashdata('form_validation_error','Invalid email or password');
        $this->load->view('login');
    }
}

    public function logout() {

        unset($_SESSION);
        session_destroy();
        redirect("auth/index", "refresh");
    }

    public function lost_pass() {

        
        
        $this->load->view("lost_pass");
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

?> 
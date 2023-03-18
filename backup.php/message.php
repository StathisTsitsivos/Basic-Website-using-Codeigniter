<?php


class message extends CI_Controller 
{
     public function __construct() 
     {
         parent ::__construct();
       
     }

    


    public function writemessage() {
        if (isset($_POST['writemessage'])) {
            
             $this-> form_validation->set_rules('message','Message','required');

             if ($this->form_validation->run() == TRUE) {

                    $data = array(
                      'message' => $_POST['Message'],
                      'message_date' => date()
                    
                     );
                
                    $this->db->insert('messages', $data);
    
                $this->session->set_flashdata("success", "Your message has been sended");
                redirect("message/writemessage", "refresh");

             }
            
        }

        $this->load->view("writemessage");
    
    }



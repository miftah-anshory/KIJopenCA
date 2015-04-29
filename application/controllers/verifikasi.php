<?php
 
class Verifikasi extends CI_Controller {
 
    function __construct()
    {
      parent::__construct();
      $this->load->model('akun','',TRUE);
    }
   
    function index()
    {
      $this->load->library('form_validation');
     
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      
      if($this->form_validation->run() == FALSE)
      {
        redirect('login');
      }

      else
      {
        if ($this->checkDB($username, $password) === TRUE)
        {
          redirect('user/home', 'refresh');
        }

        else
        {  
          redirect('login');
        }
      }
    }
   
   function checkDB($username, $password)
   {
     $result = $this->akun->login($username, $password);
   
     if($result)
     {
       $sess_array = array();
       foreach($result as $row)
       {
         $sess_array = array(
           'username' => $username
         );
         $this->session->set_userdata('logged_in', $sess_array);
       }
       return TRUE;
     }

     else
     {
       $this->form_validation->set_message('checkDB', 'Invalid Username or Password');
       return false;
     }
   }
}
?>
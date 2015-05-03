<?php
	
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];

			$data['judul'] = "Control Panel";
			$this->load->view('controlPanel',$data);
		}

		else
		{
			redirect('user', 'refresh');
		}
	}
}

/* End of file user.php */
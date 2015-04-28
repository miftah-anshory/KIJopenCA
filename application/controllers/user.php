<?php
	
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['judul'] = "Login";
		$this->load->view('login',$data);
	}

	function register()
	{
		$data['judul'] = "Registration";
		$this->load->view('register',$data);
	}

	function home()
	{
		$data['judul'] = "Home";
		$this->load->view('home',$data);
	}

	function insertUser()
	{
		$this->load->model('akun');
		$data = array
		(
			'nama' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		if($this->akun->insertAkun($data))
		{
			$this->session->set_flashdata('success','Anda Berhasil Terdaftar!');
		}
		else
		{
			$this->session->set_flashdata('error','Anda Gagal Terdaftar!');
		}

		return redirect('user/register');
	}
}

/* End of file user.php */
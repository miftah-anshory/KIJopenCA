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
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];

			$data['judul'] = "Home";
			$this->load->view('home',$data);
		}

		else
		{
			redirect('user', 'refresh');
		}
	}

	function viewProfile()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];

			$this->load->model('akun');
			$data['akun'] = $this->akun->getAkun($username);

			$data['judul'] = "View Profile";
			$this->load->view('viewProfile',$data);
		}

		else
		{
			redirect('user', 'refresh');
		}
	}

	function editProfile()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];

			$this->load->model('akun');
			$data['akun'] = $this->akun->getAkun($username);

			$data['judul'] = "Edit Profile";
			$this->load->view('editProfile',$data);
		}

		else
		{
			redirect('user', 'refresh');
		}
	}

	function createCA()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];

			$this->load->model('akun');
			$data['akun'] = $this->akun->getAkun($username);

			$data['judul'] = "Create CA";
			$this->load->view('createCA',$data);
		}

		else
		{
			redirect('user', 'refresh');
		}
	}

	function downloadCA()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$username = $session_data['username'];

			$this->load->model('akun');
			$data['akun'] = $this->akun->getAkun($username);
			$iduser = (int)$this->akun->getIdUser($username)->iduser;
			$data['ca'] = $this->akun->getCA($iduser);
			$data['judul'] = "Download CA";
			$this->load->view('downloadCA',$data);
		}

		else
		{
			redirect('user', 'refresh');
		}
	}

	function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('user', 'refresh');
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

	function updateUser()
	{
		$this->load->model('akun');
		$data = array
		(
			'nama' => $this->input->post('nameUpdate'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi'),
			'telepon' => $this->input->post('telepon')
		);

		if($this->akun->insertAkun($data))
		{
			$this->session->set_flashdata('success','Data Berhasil Diperbarui!');
		}
		else
		{
			$this->session->set_flashdata('error','Data Gagal Diperbarui!');
		}

		return redirect('user/editProfile');
	}

	function insertCA()
	{
		$this->load->model('akun');
		$data = array
		(
			'iduser' => $this->input->post('idUser'),
			'nama_user' => $this->input->post('nameCA'),
			'email_user' => $this->input->post('emailCA'),
			'kodenegara' => $this->input->post('kodeNegara'),
			'provinsi_user' => $this->input->post('provinsiCA'),
			'kota_user' => $this->input->post('kotaCA'),
			'namaorganisasi' => $this->input->post('organisasi_nama'),
			'unitorganisasi' => $this->input->post('organisasi_unit'),
			'challengepassword' => $this->input->post('chPass'),
			'optionalcompany' => $this->input->post('optionalComp'),
			'status' => $this->input->post('0')
		);

		if($this->akun->insertDataCA($data))
		{
			$this->session->set_flashdata('success','Data Sertifikat Berhasil Dimasukkan!');
		}
		else
		{
			$this->session->set_flashdata('error','Data Sertifikat Gagal Dimasukkan!');
		}

		return redirect('user/createCA');		
	}
}

/* End of file user.php */
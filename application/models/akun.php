<?php

class Akun extends CI_Model
{
	public function insertAkun($data)
	{
		if($this->db->insert('user', $data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getAkun($username)
	{
		$data['user.username'] = $username;
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($data);
		$sql = $this->db->get();
		return $sql->result();
	}

	public function login($username, $password)
	{
		$this -> db -> select('username, password');
		$this -> db -> from('user');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', $password);
		$this -> db -> limit(1);
		 
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}

/* End of file produk.php */
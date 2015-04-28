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

	public function login($username, $password)
	{
		$this -> db -> select('NRP, PASSWORD_MHS');
		$this -> db -> from('mahasiswa');
		$this -> db -> where('NRP', $nrp);
		$this -> db -> where('PASSWORD_MHS', $password);
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
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

	public function insertDataCA($data)
	{
		if($this->db->insert('ca', $data))
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

	public function getIdUser($username)
	{
		$data['user.username'] = $username;
		$this->db->select('iduser');
		$this->db->from('user');
		$this->db->where($data);
		$sql = $this->db->get();
		return $sql->row();
	}

	public function getCA($iduser)
	{
		$data['ca.iduser'] = $iduser;
		$this->db->select('*');
		$this->db->from('ca');
		$this->db->where($data);
		$sql = $this->db->get();
		return $sql->result();
	}

	public function getIDuserCA()
	{
		$this->db->distinct();
		$this->db->select('iduser');
		$this->db->from('ca');
		$sql = $this->db->get();
		return $sql->result();
	}

	public function getUsername($iduser)
	{
		$data['ca.iduser'] = $iduser;
		$this->db->select('user.username');
		$this->db->join('user', 'user.iduser = ca.iduser');
		$this->db->where($data);
		$sql = $this->db->get('ca');
		return $sql->result();
	}

	public function getCAAdmin()
	{
		$this->db->select('*');
		$this->db->from('ca');
		$sql = $this->db->get();
		return $sql->result();
	}

	public function acceptCA($idcreate)
	{
		$status = 1;
		$this->db->update('ca', array('status' => $status), array('idcreate' => $idcreate));
	}
	
	public function rejectCA($idcreate)
	{
		$status = 0;
		$this->db->update('ca', array('status' => $status), array('idcreate' => $idcreate));
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
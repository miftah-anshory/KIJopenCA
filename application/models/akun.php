<?php

class Akun extends CI_Model
{
	public function insertAkun($data)
	{
		$this->db->insert('user', $data);
	}
}

/* End of file produk.php */
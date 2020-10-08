<?php
class User extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function check_user($email_id)
	{
		$result= $this->db->select("SELECT * FROM `users` WHERE email_id = '".$email_id."'");
		$count = count($result);
		return $count;
	}
	public function insert_user($data)
	{
		$this->db->insert('auth', $data);
	}

}
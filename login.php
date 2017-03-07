<?php

namespace login;

class Login
{
	private $db      		= "";
	private $table   		= "";
	private $columnUsername = "";
	private $columnPassword = "";

	public function __construct($dbObj,$table,$columnUsername,$columnPassword)
	{
		$this->db 			= ($dbObj);
		$this->table 		= trim($table);
		$this->colUsername  = $columnUsername;
		$this->colPassword  = $columnPassword;
	}

	public function validate($username,$password)
	{
		$username = htmlentities($username, ENT_QUOTES, 'UTF-8');
		$password = htmlentities($password, ENT_QUOTES, 'UTF-8');
		
		$query = "SELECT * FROM $this->table WHERE $this->colUsername = '$username'";
		
		$ret = $this->db->query($query);

		if($ret->num_rows == 1)
		{
			$response = $ret->fetch_assoc();
			
			$hashedPassword = $response["$this->colPassword"];
			
			// Now check the password
			if(password_verify($password,$hashedPassword))
			{
				return $response;
			}
			else
			{
				return FALSE ;
			}
		}
		else{
			return FALSE;
		}
	}

}
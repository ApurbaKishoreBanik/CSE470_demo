<?php

namespace App\Models;

class login
{
	public $message;

	public $pass;

	public function setShowmessage($message)
	{
		$this->message = $message;
	}

	public function getShowmessage()
	{
		return $this->message;
	}

	public function checkLogin()
	{
		return "Login successful";
	}

	public function setPassword($pass)
	{
		$this->pass = $pass;
	}

	public function getPass()
	{
		return $this->pass;
	}

}

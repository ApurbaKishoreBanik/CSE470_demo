<?php

namespace App\Models;

class staffdetails
{
	public $name;

	public $salary;

	public function setShowmessage($name)
	{
		$this->name = $name;
	}

	public function getShowmessage()
	{
		return $this->name;
	}



	public function setsalary($salary)
	{
		$this->salary = $salary;
	}

	public function getsalary()
	{
		return $this->salary;
	}

}

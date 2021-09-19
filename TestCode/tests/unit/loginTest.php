<?php

class loginTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $login;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->log = new \App\Models\login;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);

	}


	public function testThatWeCanGetMessage()
	{
		$this->log->setShowmessage('admin');

		$this->assertEquals($this->log->getShowmessage(), 'admin');
	}

  public function testThatWeCanGetPass()
	{
		$this->log->setPassword('1234');

		$this->assertEquals($this->log->getPass(), '1234');
	}

	public function testThatWeCanlogin()
	{
		// $this->user->checkLogin();

		$this->assertEquals($this->log->checkLogin(), 'Login successful');
	}


}

<?php

class staffdetailsTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $staffdetails;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->staffdetails = new \App\Models\staffdetails;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);

	}


	public function testThatWeCanGetMessage()
	{
		$this->staffdetails->setShowmessage('Joan Laporta');

		$this->assertEquals($this->staffdetails->getShowmessage(), 'Joan Laporta');
	}

  public function testThatWeCanGetSalary()
	{
		$this->staffdetails->setsalary('500000');

		$this->assertEquals($this->staffdetails->getsalary(), '500000');
	}




}

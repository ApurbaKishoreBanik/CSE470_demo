<?php

class managerdetailsTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $managerdetails;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->managerdetails = new \App\Models\managerdetails;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);

	}


	public function testThatWeCanGetName()
	{
		$this->managerdetails->setShowmessage('Ronald Koeman');

		$this->assertEquals($this->managerdetails->getShowmessage(), 'Ronald Koeman');
	}

  public function testThatWeCanGetID()
	{
		$this->managerdetails->setID('123456789');

		$this->assertEquals($this->managerdetails->getID(), '123456789');
	}




}

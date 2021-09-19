<?php

class playerdetailsTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $playerdetails;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->playerdetails = new \App\Models\playerdetails;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);

	}


	public function testThatWeCanGetMessage()
	{
		$this->playerdetails->setShowmessage('Messi');

		$this->assertEquals($this->playerdetails->getShowmessage(), 'Messi');
	}

  public function testThatWeCanGetGoals()
	{
		$this->playerdetails->setgoals('613');

		$this->assertEquals($this->playerdetails->getgoals(), '613');
	}
	public function testThatWeCanGetID()
	{
		$this->playerdetails->setID('10');

		$this->assertEquals($this->playerdetails->getID(), '10');
	}



} ?>

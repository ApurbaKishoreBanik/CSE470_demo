<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->user = new \App\Models\User;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);

	}


	public function testThatWeCanGetTheFirstName()
	{
		$this->user->setFirstName('Apurba');

		$this->assertEquals($this->user->getFirstName(), 'Apurba');
	}

	public function testThatWeCanGetTheLastName()
	{
		$this->user->setLastName('Banik');

		$this->assertEquals($this->user->getLastName(), 'Banik');
	}

	public function testFullNameIsReturned()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Apurba');

		$user->setLastName('Banik');

		$this->assertEquals($user->getFullName(), 'Apurba Banik');
	}

	public function testFirstAndLastNameAreTrimmed()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Apurba     ');

		$user->setLastName('     Banik');

		$this->assertEquals($user->getFirstName(), 'Apurba');

		$this->assertEquals($user->getLastName(), 'Banik');
	}

	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;

		$user->setEmail('banik@gmail.com');

		$this->assertEquals($user->getEmail(), 'banik@gmail.com');
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Apurba');

		$user->setLastName('Banik');

		$user->setEmail('banik@gmail.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Apurba Banik');
		$this->assertEquals($emailVariables['email'], 'banik@gmail.com');
	}
}

<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LaraAdminWithoutLoginTest extends TestCase
{
	use DatabaseMigrations;

	/**
     * Basic setup before testing
     *
     * @return void
     */
    public function setUp()
    {
		parent::setUp();
		// Generate Seeds
		$this->artisan('db:seed');
    }

	/**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
		$this->visit('/')
             ->see('LaraAdmin');
    }

	/**
     * Test Login Page.
     *
     * @return void
     */
    public function testLoginPage()
    {
		$this->visit('/login')
            ->seePageIs('/register');
    }
}

<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    // Including this line will refresh the DB after every test.
    use RefreshDatabase;

    /**
     * Test login page.
     * @return void
     */
    public function testLoginPageIsPresent()
    {
        $response = $this->get(route('auth.get_login'));
        $response->assertStatus(200);
    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUnsuccessfulLogin()
    {
        $response = $this->post(route('auth.do_login'), [
            'email' => 'test@gmail.com',
            'password' => 'wrong',
        ]);

        $response->assertSessionHas('message');
        $this->assertGuest();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSuccessfulLogin()
    {
        // Create a test account
        $user = factory(User::class)->create([
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $response = $this->post(route('auth.do_login'), [
            'email' => 'test@gmail.com',
            'password' => 'password',
        ]);

        $this->assertAuthenticatedAs($user);
    }



}

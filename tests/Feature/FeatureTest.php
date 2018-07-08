<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Seeder;

class FeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testRegister()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testLogin()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testAbout()
    {
        //create a user to simulate authentication
        $user = factory(App\User::class)->create();

        //login and access page using user
        $response = $this->actingAs($user)
            ->get('/about');

        $response->assertStatus(200);
    }
}

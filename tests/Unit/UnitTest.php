<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //Clear Database after test
    //use RefreshDatabase;

    public function testUserInsert()
    {
        $user = new User();
        $user->name = "Oliver";
        $user->email = str_random(10).'@example.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->remember_token = str_random(10);

        $this->assertTrue($user->save());
    }
}
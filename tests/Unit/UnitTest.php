<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Seeder;

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
        $user = factory(App\User::class, 1)->create();

        $this->assertDatabaseHas('users', [
           'name' => 'Ela'
        ]);
    }

    public function testUserUpdate()
    {
        DB::table('users')
            ->where('name', 'Ela')
            ->update(['name' => 'Steve Smith']);

        $this->assertDatabaseHas('users', [
            'name' => 'Steve Smith'
        ]);
    }
}

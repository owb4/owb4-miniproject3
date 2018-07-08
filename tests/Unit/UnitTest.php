<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Seeder;
use App\User;
use App\Car;
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

    public function testUserDelete()
    {
        $user = new User();
        $user->name = "Oliver";
        $user->email = str_random(10).'@example.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->remember_token = str_random(10);
        $user->save();

        $this->assertTrue($user->delete());
    }

    public function testUserUpdate()
    {
        $user = App\User::find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
    }

    public function testDBSeedCount()
    {
        $user = App\User::All();
        $prevUserCount = $user->count();
        factory(App\User::class, 50)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
        $user = App\User::All();
        $newUserCount = $user->count();
        $diff = $newUserCount - $prevUserCount;
        $this->assertEquals(50,$diff);
    }
    public function testCarInsert()
    {
        $car = new Car();
        $car->model = "tundra";
        $car->make = "toyota";
        $car->year = "2014";

        $this->assertTrue($car->save());
    }
}
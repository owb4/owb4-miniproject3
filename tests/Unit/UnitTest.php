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

    public function testUserSeedCount()
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

    public function testCarUpdate()
    {
        $car = App\Car::find(1);
        $car->year = '2000';
        $this->assertTrue($car->save());
    }

    public function testCarDelete()
    {
        $car = new Car();
        $car->model = "tundra";
        $car->make = "toyota";
        $car->year = "2014";
        $car->save();

        $this->assertTrue($car->delete());
    }

    public function testCarSeedCount()
    {
        $car = App\Car::All();
        $prevCarCount = $car->count();
        factory(App\Car::class, 50)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
        $car = App\Car::All();
        $newCarCount = $car->count();
        $diff = $newCarCount - $prevCarCount;
        $this->assertEquals(50,$diff);
    }
}
<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::inRandomOrder()->first();

        $this->assertInternalType('int',$user->id);
        $this->assertInstanceOf('App\User',$user);
    }

    public function testExample3()
    {
        $user = User::inRandomOrder()->first();

        $this->assertInternalType('string',$user->name);
        $this->assertfinite($user->id);
    }

    public function testExample4()
    {
        $user = User::inRandomOrder()->first();

        $this->assertInternalType('float', 4.2);

    }

}

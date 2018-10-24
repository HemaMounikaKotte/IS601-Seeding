<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testBasicTest5()
    {
        $response = $this->get('/njit/bag');

        $response->assertStatus(404);
        $this->assertFileExists('/home/hema/PhpstormProjects/IS601-Seeding/tests/Feature/ExampleTest.php');

    }
}

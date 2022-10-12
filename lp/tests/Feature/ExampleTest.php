<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_example2()
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);
        $response->assertSee('Post');
        $response->assertSee('post 1');
        $response->assertSee('post 2');
        $response->assertSee('post 3');

    }
}
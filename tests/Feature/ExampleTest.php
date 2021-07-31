<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Homepage HTTP status OK 200.
     *
     * @return void
     */
    public function test_homeStatus()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

        /**
     * Category section HTTP status OK 200.
     *
     * @return void
     */
    public function test_categoryStatus()
    {
        $response = $this->get('/arcade');

        $response->assertStatus(200);
    }
}

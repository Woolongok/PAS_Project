<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase; // Use this trait to refresh the database

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/students');

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

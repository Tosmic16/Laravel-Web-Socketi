<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostMessaageTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $postData = [
            'message' => 'unit_testing',
            'user' => 1,
            // Add more data as needed based on your form input requirements
        ];
    
        // Perform the form POST request to the /ws route
        $response = $this->post('/chat-message', $postData);

        $response->assertStatus(200);
    }
}

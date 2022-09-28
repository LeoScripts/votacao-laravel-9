<?php

namespace Tests\Feature\Answer;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class AnswerAllTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function rendering_answers()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $response = $this->get('/answer');
        $response->assertOk();

    }
}

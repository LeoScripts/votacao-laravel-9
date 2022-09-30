<?php

namespace Tests\Feature\Answer;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Answer;

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

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function rendering_create_answers()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $response = $this->get('/answer/create');
        $response->assertOk();
    }

        /**
     * A basic feature test example.
     *
     * @test
     */
    public function rendering_store_answers()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        Answer::factory()->create();
    }

}

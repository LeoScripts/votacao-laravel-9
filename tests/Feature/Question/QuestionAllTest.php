<?php

namespace Tests\Feature\Question;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Question;
use App\Models\User;

class QuestionAllTest extends TestCase
{

    // aqui estou usando a notation @test

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function rendering_all_question()
    {

        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $response = $this->get('/question');
        $response->assertStatus(200);
    }

        /**
     * A basic feature test example.
     *
     * @test
     */
    public function rendering_register_question()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $response = $this->get('question/create');
        $response->assertOk();
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function register_new_question()
    {

        $question = [
            'question' => 'test',
            'initial_date' => '2022-09-28',
            'end_date' => '2022-09-28',
            'created_at' => '2022-09-28 12:51:34',
            'updated_at' => '2022-09-28 12:51:34'
        ];

        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $newQuestion = Question::create($question);
    }

}

<?php

namespace Tests\Feature\Survey;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Survel;
use App\Models\User;

class SurveyAllTest extends TestCase
{

    // aqui estou usando a notation @test

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function rendering_all_survey()
    {

        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $response = $this->get('/survey');
        $response->assertStatus(200);
    }

        /**
     * A basic feature test example.
     *
     * @test
     */
    public function rendering_register_survey()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $response = $this->get('survey/create');
        $response->assertOk();
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function register_new_survey()
    {

        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();

        $newSurvey = Survel::factory()->create();
    }

}

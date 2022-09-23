<?php

namespace Tests\Feature\Survey;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
        $response = $this->get('/survey');

        $response->assertStatus(200);
    }
}

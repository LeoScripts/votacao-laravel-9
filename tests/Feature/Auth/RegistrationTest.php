<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function registration_screen_rendered()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }


    /**
     * @test
     */
    public function new_user_register()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertAuthenticated();
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * @test
     */
    function test_get_saludo_name_nickname()
    {
        $name = 'Saul';
        $nickname = 'Saulson';
        $this->get("/saludo/{$name}/{$nickname}")
            ->assertStatus(200)
            ->assertSee("Bienvenido {$name}, tu apodo es {$nickname}");
    }

    /**
     * @test
     */
    function test_get_saludo_name()
    {
        $name = 'Saul';
        $this->get("/saludo/{$name}")
            ->assertStatus(200)
            ->assertSee("Bienvenido {$name}");
    }
}

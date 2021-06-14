<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     */
    function test_get_usuario()
    {
        $this->get('/usuario')
            ->assertStatus(200)
            ->assertSee('Usuario');
    }

    /**
     * @test
     */
    function test_get_usuario_id()
    {
        $id = 10;
        $this->get("/usuario/{$id}")
            ->assertStatus(200)
            ->assertSee("Mostrando detalle del usuario: {$id}");
    }

    /**
     * @test
     */
    function test_get_usuario_nuevo()
    {
        $this->get("/usuario/nuevo")
            ->assertStatus(200)
            ->assertSee("Crear usuario nuevo");
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test **/
    function it_loads_user_list_pages()
    {
      //  $this->assertTrue(true);
      $this->get('/usuarios')
      ->assertStatus(200)
      ->assertSee('Usuarios');
    }

    /** @test **/
    function it_loads_the_users_details_page()
    {
      $this->get('/usuarios/5')
      ->assertStatus(200)
      ->assertSee('Mostrando detalles del usuarios');
    }

    /** @test **/
    function it_loads_the_new_users_page()
    {
      $this->withoutExceptionHandling();

      $this->get('/usuarios/nuevo')
      ->assertStatus(200)
      ->assertSee('Crear nuevo usuario');
    }


}

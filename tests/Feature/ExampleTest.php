<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function TestRaiz()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

    }
    public function testUsuariosListasConDatos()
    {
        $response = $this->get('/usuarios');
        $response->assertStatus(500);

        $response->assertSee("Usuarios");
  



    }
    public function testUsuariosShow()
    {
        $response = $this->get('/usuarios/5');
        $response->assertSee("Usuario");
  



        $response->assertStatus(500);
    }
   
    public function testCrearUser()
    {
        $response = $this->get('/usuarios/nuevo');

        $response->assertStatus(200);
    }
       
    public function testPostCrearUser()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/usuarios',[
            'name'=>"Test",
            'email'=>'test@test.com',
            'password'=>'loco'
        ])->assertSee("Procesando datos");

        $this->assertDatabaseHas('users',[
            'name'=>'Test',
            'email'=>'test@test.com',
            'password'=>'nose'
        ]);
    }
    

    
}

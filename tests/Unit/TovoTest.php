<?php

namespace Tests\Unit;
use Tests\TestCase;

/*use PHPUnit\Framework\TestCase;*/


class TovoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function ver_pagina_principal()
    {
        $response = $this->get('/home');
        
        $response->assertStatus(200);
        
    }
}

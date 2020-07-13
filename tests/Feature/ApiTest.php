<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function ログインJWT認証をする()
    {

        $this->json(
            'POST',
            '/api/users/login',
            [
                'email' => 'example@gmail.com',
                'password' => '25871236',
            ]
        )->assertStatus(200);
    }
}

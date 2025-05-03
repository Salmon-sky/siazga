<?php

namespace Tests\Feature\Iteration1;

use Tests\TestCase;
use App\Models\User;


class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login(): void
    {
        $user = [
            'email' => 'admin@admin',
            'password' => '1234567'
        ];
        $response = $this->post('/login', $user);

        $this->assertAuthenticated();
    }
    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}

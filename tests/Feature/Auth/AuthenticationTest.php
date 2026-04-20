<?php

use App\Models\User;

test('login screen can be rendered', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create([
        'role' => 'gestor',
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
    $response->assertRedirect('/validacio-error');
});

test('users can logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $this->assertGuest();
    $response->assertRedirect('/');
});

test('consultors can view organismes but not users management', function () {
    $consultor = User::factory()->create([
        'role' => 'consultor',
    ]);

    $this->actingAs($consultor)
        ->get('/organismes')
        ->assertOk();

    $response = $this->actingAs($consultor)->get('/users');

    $response->assertRedirect('/login');
    $this->assertGuest();
});

test('gestors can access users management', function () {
    $gestor = User::factory()->create([
        'role' => 'gestor',
    ]);

    $this->actingAs($gestor)
        ->get('/users')
        ->assertOk();
});

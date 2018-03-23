<?php

namespace Tests\Feature;

use ComplainDesk\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AllRoutesTest extends TestCase
{
    public function testShowHomePage()
    {
        $response = $this->get('/');

        $response->assertStatus(301);
    }

    public function testShowLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testShowRegistrationPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testShowPasswordResetPage()
    {
        $response = $this->get('/password/reset');

        $response->assertStatus(200);
    }

    public function testShowDashboardPage()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
                         ->get('/home');
        $response->assertStatus(200);
    }

    public function testShowCreateTicketsPage()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
                         ->get('/tickets');
        $response->assertStatus(200);
    }

    public function testShowUserTicketsPage()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
                         ->get('/mytickets');
        $response->assertStatus(200);
    }

    public function testShowSettingsPage()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
                         ->get('/settings');
        $response->assertStatus(200);
    }

    public function testShowAdminTicketsPage()
    {
        $user = factory(User::class)->create(
            [
                'is_admin' => 1
            ]
        );
        $response = $this->actingAs($user)
                         ->get('admin/tickets');
        $response->assertStatus(200);
    }


    public function testShowAdminCategoryPage()
    {
        $user = factory(User::class)->create(
            [
                'is_admin' => 1
            ]
        );
        $response = $this->actingAs($user)
                         ->get('admin/category');
        $response->assertStatus(200);
    }

    public function testShowAdminUsersPage()
    {
        $user = factory(User::class)->create(
            [
                'is_admin' => 1
            ]
        );
        $response = $this->actingAs($user)
                         ->get('admin/category');
        $response->assertStatus(200);
    }
}

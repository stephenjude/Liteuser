<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    use DatabaseMigrations;

    public function test_get_user_list()
    {
        User::factory()->count(2)->create();

        $this->response = $this->getJson('api/users');

        $this->response->assertOk();

        $this->assertApiSuccess();

        $this->assertApiResponseCollection(User::all(['id', 'name', 'email']));
    }


    public function test_get_user_by_id()
    {
        $user = User::factory()->create()->only(['id', 'name', 'email']);

        $this->response = $this->getJson('api/users/'.$user['id']);

        $this->response->assertOk();

        $this->assertApiSuccess();

        $this->assertApiResponse($user);
    }
}

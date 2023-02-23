<?php

namespace Tests\Unit\Service;

use Tests\TestCase;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function IDに対応するユーザーを取得できること()
    {
        $expectedUser = User::factory()->create();

        $userModel = new User();
        $userService = new UserService($userModel);
        $targetUser = $userService->get($expectedUser->id);

        $this->assertSame($expectedUser->id, $targetUser->id);
    }
}

<?php

namespace Tests\Unit\Service;

use Tests\TestCase;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

    /**
     * @test
     */
    public function IDに対応するユーザーが存在しない場合、例外をthrowすること()
    {
        $this->expectException(NotFoundHttpException::class);

        User::factory()->create();

        $userModel = new User();
        $userService = new UserService($userModel);

        // テストデータに存在しないid
        $userId = 9999;
        $userService->get($userId);
    }
}

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
        // ユーザーを作成する
        $expectedUser = User::factory()->create();

        // 作成したユーザーのidで検索する
        $userModel = new User();
        $service = new UserService($userModel);
        $targetUser = $service->findById($expectedUser->id);

        // 作成したユーザーと取得したユーザーを検証
        $this->assertSame($expectedUser->id, $targetUser->id);
    }
}

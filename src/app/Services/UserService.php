<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserService
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * IDに対応するUserモデルを取得
     *
     * @param integer $id
     * @return User
     */
    public function findById(int $id): User
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('User ID dose not exist');
        }

        $result = $this->user->find($id);

        if (is_null($result)) {
            throw new NotFoundHttpException("User with ID {$id} does not exist");
        }

        return $result;
    }
}

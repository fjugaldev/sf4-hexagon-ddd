<?php

namespace App\Application\Adapter;

use App\Domain\Model\UserVO;
use App\Infrastructure\Entity\User;

class EntityToVO
{
    public static function transform(User $user): UserVO
    {
        $userVO = new UserVO();
        $userVO->setId($user->getId());
        $userVO->setName($user->getName());
        $userVO->setLastname($user->getLastname());
        $userVO->setEmail($user->getEmail());
        $userVO->setPassword($user->getPassword());

        return $userVO;
    }

}
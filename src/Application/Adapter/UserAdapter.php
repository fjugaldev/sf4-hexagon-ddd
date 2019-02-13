<?php

namespace App\Application\Adapter;

use App\Domain\Model\UserVO;
use App\Infrastructure\Entity\User;
use App\Infrastructure\Model\Output\UserOutput;

class UserAdapter
{
    public static function InputToVO(): UserVO
    {
    }

    /**
     * @param User $user
     *
     * @return UserVO
     */
    public static function EntityToVO(User $user): UserVO
    {
        return new UserVO($user->__toStdClass());
    }

    public static function VOToEntity(): User
    {
    }

    public static function VOToOutput(UserVO $userVO): array
    {
        $userOutput = new UserOutput();
        $userOutput->setId($userVO->getId());
        $userOutput->setName($userVO->getName());
        $userOutput->setLastname($userVO->getLastname());
        $userOutput->setEmail($userVO->getEmail());
        $userOutput->setPassword($userVO->getPassword());

        return $userOutput->__toArray();
    }
}
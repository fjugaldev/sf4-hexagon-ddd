<?php

namespace App\Application\Repository;

use App\Domain\Model\UserVO;
use App\Infrastructure\Model\Input\UserInput;

interface UserRepository
{
    public function find(UserInput $userInput): UserVO;
}
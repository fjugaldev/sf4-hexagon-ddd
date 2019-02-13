<?php

namespace App\Application\UseCase;

use App\Application\Repository\UserRepository;
use App\Domain\Model\UserVO;
use App\Infrastructure\Model\Input\UserInput;

class FindUserUseCase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(UserInput $userInput): UserVO
    {
        return $this->userRepository->read($userInput);
    }
}
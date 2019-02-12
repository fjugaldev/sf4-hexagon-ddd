<?php

namespace App\Application\UseCase;

use App\Application\Adapter\EntityToVO;
use App\Application\Repository\UserRepository;
use App\Domain\Model\UserVO;

class FindUserUseCase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(int $id): UserVO {
        $userEntity = $this->userRepository->read($id);

        return EntityToVO::transform($userEntity);
    }

}
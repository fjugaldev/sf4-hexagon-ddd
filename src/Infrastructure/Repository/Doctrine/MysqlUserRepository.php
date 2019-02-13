<?php

namespace App\Infrastructure\Repository\Doctrine;

use App\Application\Adapter\EntityToVO;
use App\Application\Adapter\UserAdapter;
use App\Application\Adapter\UserInputDTO;
use App\Application\Repository\UserRepository;
use App\Domain\Model\UserVO;
use App\Infrastructure\Entity\User;
use App\Infrastructure\Model\Input\UserInput;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class MysqlUserRepository
 *
 * @package App\Infrastructure\Repository\Doctrine
 */
class MysqlUserRepository implements UserRepository
{

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param UserInput $userInput
     *
     * @return UserVO
     */
    public function read(UserInput $userInput): UserVO
    {
        $userEntity = $this->em->getRepository(User::class)->find($userInput->getId());

        return UserAdapter::EntityToVO($userEntity);
    }
}
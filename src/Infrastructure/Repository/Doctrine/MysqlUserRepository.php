<?php

namespace App\Infrastructure\Repository\Doctrine;

use App\Application\Repository\UserRepository;
use App\Infrastructure\Entity\User;
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
     * @param $id
     *
     * @return User
     */
    public function read($id): User
    {
        return $this->em->getRepository(User::class)->find($id);
    }
}
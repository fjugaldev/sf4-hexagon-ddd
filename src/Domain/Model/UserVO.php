<?php

namespace App\Domain\Model;

/**
 * Class UserVO
 *
 * @package App\Domain\Model
 */
final class UserVO
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $lastname;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;

    /**
     * UserVO constructor.
     *
     * @param \stdClass $user
     */
    public function __construct(\stdClass $user)
    {
        $this->id       = $user->id;
        $this->name     = $user->name;
        $this->lastname = $user->lastname;
        $this->email    = $user->email;
        $this->password = $user->password;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
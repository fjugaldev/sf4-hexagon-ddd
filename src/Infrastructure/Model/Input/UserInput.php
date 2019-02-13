<?php

namespace App\Infrastructure\Model\Input;

use App\Application\Model\Input\UserInputInterface;

class UserInput implements UserInputInterface
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return UserInputInterface
     */
    public function setId(int $id): UserInputInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return UserInputInterface
     */
    public function setName(string $name): UserInputInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return UserInputInterface
     */
    public function setLastname(string $lastname): UserInputInterface
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return int
     */
    public function getEmail(): int
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return UserInputInterface
     */
    public function setEmail(string $email): UserInputInterface
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return int
     */
    public function getPassword(): int
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return UserInputInterface
     */
    public function setPassword(string $password): UserInputInterface
    {
        $this->password = $password;

        return $this;
    }
}
<?php

namespace App\Infrastructure\Model\Output;

use App\Application\Model\Output\BaseOutputInterface;
use App\Application\Model\Output\UserInputInterface;
use App\Application\Model\Output\UserOutputInterface;

class UserOutput implements UserOutputInterface, BaseOutputInterface
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
     * @param int $id
     *
     * @return UserOutputInterface
     */
    public function setId(int $id): UserOutputInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return UserOutputInterface
     */
    public function setName(string $name): UserOutputInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $lastname
     *
     * @return UserOutputInterface
     */
    public function setLastname(string $lastname): UserOutputInterface
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return UserOutputInterface
     */
    public function setEmail(string $email): UserOutputInterface
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return UserOutputInterface
     */
    public function setPassword(string $password): UserOutputInterface
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return array
     */
    public function __toArray(): array
    {
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'lastname' => $this->lastname,
            'email'    => $this->email,
        ];
    }
}
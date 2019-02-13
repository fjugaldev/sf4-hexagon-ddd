<?php

namespace App\Application\Model\Output;

interface UserOutputInterface
{
    /**
     * @param int $id
     *
     * @return UserInputInterface
     */
    public function setId(int $id): self;

    /**
     * @param string $name
     *
     * @return UserInputInterface
     */
    public function setName(string $name): self;

    /**
     * @param string $lastname
     *
     * @return UserInputInterface
     */
    public function setLastname(string $lastname): self;

    /**
     * @param string $email
     *
     * @return UserInputInterface
     */
    public function setEmail(string $email): self;

    /**
     * @param string $password
     *
     * @return UserInputInterface
     */
    public function setPassword(string $password): self;
}
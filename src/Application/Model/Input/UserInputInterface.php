<?php

namespace App\Application\Model\Input;

/**
 * Interface UserInputInterface
 *
 * @package App\Application\Model\Input
 */
interface UserInputInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     *
     * @return UserInputInterface
     */
    public function setId(int $id): self;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return UserInputInterface
     */
    public function setName(string $name): self;

    /**
     * @return string
     */
    public function getLastname(): string;

    /**
     * @param string $lastname
     *
     * @return UserInputInterface
     */
    public function setLastname(string $lastname): self;

    /**
     * @return int
     */
    public function getEmail(): int;

    /**
     * @param string $email
     *
     * @return UserInputInterface
     */
    public function setEmail(string $email): self;

    /**
     * @return int
     */
    public function getPassword(): int;

    /**
     * @param string $password
     *
     * @return UserInputInterface
     */
    public function setPassword(string $password): self;
}
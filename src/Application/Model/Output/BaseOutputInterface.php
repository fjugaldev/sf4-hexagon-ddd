<?php

namespace App\Application\Model\Output;

interface BaseOutputInterface
{
    public function __toArray(): array;
}
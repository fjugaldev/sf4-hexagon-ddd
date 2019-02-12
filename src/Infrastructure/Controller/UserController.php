<?php

namespace App\Infrastructure\Controller;

use App\Application\UseCase\FindUserUseCase;
use App\Infrastructure\Repository\Doctrine\MysqlUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    public function find(Request $request) {

        $UserRepository = new MysqlUserRepository($this->get('doctrine.orm.entity_manager'));
        $findUserUseCase = new FindUserUseCase($UserRepository);
        $user = $findUserUseCase->execute($request->get('id', null));

        return new JsonResponse(json_encode($user));
    }
}
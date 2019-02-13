<?php

namespace App\Infrastructure\Controller;

use App\Application\Adapter\UserAdapter;
use App\Application\UseCase\FindUserUseCase;
use App\Infrastructure\Form\UserFormType;
use App\Infrastructure\Model\Input\UserInput;
use App\Infrastructure\Repository\Doctrine\MysqlUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    public function getUserData(Request $request)
    {
        $userInput = new UserInput();
        $userForm  = $this->createForm(UserFormType::class, $userInput);
        $userForm->handleRequest($request);

        if ($userForm->isValid())
        {
            $UserRepository  = new MysqlUserRepository($this->get('doctrine.orm.entity_manager'));
            $findUserUseCase = new FindUserUseCase($UserRepository);
            $user            = $findUserUseCase->execute($userForm->getData());

            return new JsonResponse(UserAdapter::VOToOutput($user), JsonResponse::HTTP_OK);
        }
        else
        {
            return new JsonResponse([], JsonResponse::HTTP_BAD_REQUEST);
        }
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// #[Route(name: 'user_')]
// class UserController extends AbstractController
// {

//     const USERS = [
//         ['id'=>12,'name'=>'Paul'],
//         ['id'=>14,'name'=>'Jean'],
//         ['id'=>22,'name'=>'Marie'],
//         ['id'=>1,'name'=>'Sophie'],
//     ];

//     #[Route(path:'/', name: 'idex')]
//     public function index(Request $request): Response
//     {
//         return $this->render('hierarchy.html.twig', ['users'=> self::USERS]);
//     }

//     #[Route(path:'/{id}', name: 'profile')]
//     public function profile(string $id): Response
//     {
//         $userIndex = array_search($id , array_column(self::USERS, 'id'));
//         if ($userIndex === false) {
//             throw $this->createNotFoundException("L\'utilisateur n\'existe pas !");

//         }
//         return $this->render('user/profile.html.twig', ['user'=> self::USERS[$userIndex]]);
//     }
// }

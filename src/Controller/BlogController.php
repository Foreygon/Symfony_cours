<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends AbstractController
{
//     #[Route('/blog', name: 'app_blog')]
//     public function index(): Response
//     {
//         return $this->render('blog/index.html.twig', [
//             'controller_name' => 'BlogController',
//         ]);
//     }

//     #[Route('/nouvelleroute', name: 'app_nouvelleroute')]
//     public function nouvelleroute(): Response
//     {   
//         // throw createNotFoundException();
//         $url = $this->generateUrl('app_blog');
//         $url = $this->generateUrl('app_blog', [], UrlGeneratorInterface::ABSOLUTE_URL);

//         dd($url);
//         // return $this->redirectToRoute('app_blog');
//     }
}

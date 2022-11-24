<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response as BrowserKitResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// #[Route('/blog' , 'app_')]
class DefaultController extends AbstractController
{
    // #[Route('/blog', name: 'app_default', methods:'get')]
    // public function index(): Response
    // {
    //    $users = [
    //     [
    //         'username'=>'Bob',
    //         'age'=> 22
    //     ],
    //     [
    //         'username'=>'Paul',
    //         'age'=> 45
    //     ],
    //     [
    //         'username'=>'Jack',
    //         'age'=> 16
    //     ],
    // ];

    // $product =[
    //     'brand'=>'Tesla',
    //     'model'=>'Model Y',
    //     'price'=>59000,
    //     'description'=>'ipsum dolor sit amet consectetur adipisicing elit. 
    //     Iusto blanditiis nesciunt corrupti, expedita reiciendis tempore perferendis 
    //     quia doloremque maiores perspiciatis ad voluptatibus deserunt laborum repellendus 
    //     nulla veniam et excepturi. Quis quod molestias exercitationem mollitia obcaecati rem eum 
    //     quia aspernatur sapiente aut numquam, suscipit beatae error dolor aliquam, nemo earum possimus?'
    // ];

    //     return $this->render('test.html.twig',[
    //         'users'=>$users,
    //         'product'=>$product
    //     ]);

    // }

    // #[Route('/blog/{id}', name: 'app_blog_id')]
    // public function blog_id($id): Response
    // {
    //    dd('ma route id');
    //     return $this->render('default/index.html.twig', [
    //         'controller_name' => 'DefaultController',
    //     ]);
    // }

    // #[Route('/blog/{name}', name: 'app_blog')]
    // public function blog($name): Response
    // {
    //    dd('ma route name');
    //     return $this->render('default/index.html.twig', [
    //         'controller_name' => 'DefaultController',
    //     ]);
    // }

    // #[Route('/test', name: 'app_test')]
    // public function test($test): Response
    // {
    //    dd('ma route id');
    //     return $this->render('default/index.html.twig', [
    //         'controller_name' => 'DefaultController',
    //     ]);
    // }

}

<?php

namespace App\Controller;

use App\Entity\Todo;
use App\Form\TodoType;
use App\Repository\TodoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    public function index(Request $request, EntityManagerInterface $EntityManagerInterface ): Response
    {
        $todo = new Todo();

        $form = $this->createForm(TodoType::class, $todo);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $EntityManagerInterface->persist($todo);
            $EntityManagerInterface->flush();
        }

        return $this->render('todo/index.html.twig', [
            'form'=> $form->createView(),
        ]);
    }

    #[Route('/todo/{id}', name: 'app_todobyid')]
    public function todobyid(TodoRepository $todoRepository, $id ): Response
    {
        $todo = $todoRepository->find($id);

        

        return $this->render('todo/test.html.twig', [
            'todo' => $todo
        ]);
    }


    #[Route('/alltodos', name: 'app_alltodos')]
    public function alltodos(TodoRepository $todoRepository): Response
    {
        
        $todos = $todoRepository->findAll();
        

        return $this->render('todo/alltodos.html.twig', [
            'todo' => $todos
        ]);
    }

    #[Route('/findby', name: 'app_findby')]
    public function findby(TodoRepository $todoRepository): Response
    {
        
        $todos = $todoRepository->findBy(['done'=>true], ['id' => 'DESC']);


        

        return $this->render('todo/findby.html.twig', [
            'todos' => $todos
        ]);
    }

    #[Route('/modify/{id}', name: 'app_modify')]
    public function modify(EntityManagerInterface $entityManagerInterface, TodoRepository $todoRepository, $id): Response
    {
        
        $todo = $todoRepository->find($id);
        $todo->setContent('Ma todo modifié');

        $entityManagerInterface->persist($todo);
        $entityManagerInterface->flush();

        return $this->render('todo/findby.html.twig');

    }

    #[Route('/remove/{id}', name: 'app_remove')]
    public function remove(EntityManagerInterface $entityManagerInterface, TodoRepository $todoRepository, $id): Response
    {
        
        $todo = $todoRepository->find($id);
        

        $entityManagerInterface->remove($todo);
        $entityManagerInterface->flush();

        return $this->render('todo/findby.html.twig');
        
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Task;
use App\Form\TaskForm;
use App\Repository\TaskRepository;


final class TaskController extends AbstractController
{
    #[Route('/task', name: 'app_task')]
    public function index(TaskRepository $taskRepository): Response
    {
        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController', 'tasks' => $taskRepository->findAll(),
        ]);
       
    }
    
    #[Route('/task/create', name:'task.create')]
    public function create(Request $request,  EntityManagerInterface $em)
    {
    	
   $task = new Task();
  
    	$form = $this->createForm(TaskForm::class, $task);
    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()){
    		
    		
    		$em->persist($task);
    		$em->flush();
    		$this->addFlash('success','Opération enregistrée');
    		return $this->RedirectToRoute('task.create');
    	 }
    	return $this->render('task/new.html.twig', ['form'=>$form, 'task'=>$task]);
    }
  
}

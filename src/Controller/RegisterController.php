<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Doctrine\ORM\EntityManagerInterface;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
    	$form = $this->createFormBuilder()
    	->add('email')
    	->add('password',RepeatedType::class,[])
    	->add('register', SubmitType::class,['attr'=>['class'=>'btn btn-success']])
    	->getForm();
    	$form->handleRequest($request);
    	if ($request->isMethod('post')){
    	
    	$data=$form->getData();
    	$user = new User;
    	$user->setEmail($data['email']);
    	$user->setPassword($data['password']);
    	$em->persist($user);
    	$em->flush();
    	
    }
        return $this->render('register/index.html.twig', [
            'controller_name' => 'RegisterController','my_form'=>$form->createView()
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Euros;
use App\Form\EurosType;
use App\Repository\EurosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\Type\EuroType;

#[Route('/euros')]
class EurosController extends AbstractController
{
    #[Route('/', name: 'app_euros_index', methods: ['GET','POST'])]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
    	return $this->render('euros/euros.html.twig', [
           'euros'=> $em->getRepository(Euros::class)->budget( $em, $request),
            'mensuel'=>   $em->getRepository(Euros::class)->mensuel( $em, $request),
            'annuel'=>$em->getRepository(Euros::class)->annuel( $em),
        ]);
    	
    	
    }
    
    #[Route('/comptes', name: 'app_euros_comptes', methods: ['GET'])]
    public function comptes(EntityManagerInterface $em, Request $request): Response
    {
    	return $this->render('euros/comptes.html.twig', [
    	  	 'le_compte'=> $request->query->get('compte'),
           'comptes_global'=>$em->getRepository(Euros::class)->comptes_global( $em, $request),
           'comptes_detail_notnull'=>$em->getRepository(Euros::class)->comptes_detail_notnull( $em, $request),
           'comptes_detail_null'=>$em->getRepository(Euros::class)->comptes_detail_null( $em, $request),
        ]);
    }
    #[Route('/libelles', name: 'app_euros_libelles', methods: ['GET'])]
    public function libelles(EntityManagerInterface $em): Response
    {
    	  return $this->render('euros/libelles.html.twig', [
           'libelles'=>$em->createQuery("select sum(p.credit - p.debit) as ss, p.libelle from App\Entity\Euros p  group by p.libelle")->getResult(),
           'libelles_detail'=>$em->createQuery("select p from App\Entity\Euros p")->getResult(),
        ]);
    }
    
    #[Route('/cheques', name: 'app_euros_cheques', methods: ['GET'])]
    public function cheques(EntityManagerInterface $em): Response
    {return $this->render('euros/cheques.html.twig', ['cheques'=>$em->createQuery("select p from App\Entity\Euros p where p.cheque is not null order by p.cheque desc")->getResult()]);}
    
    #[Route('/cbid', name: 'app_euros_cbid', methods: ['GET'])]
    public function cbid(EntityManagerInterface $em): Response
    {return $this->render('euros/cbid.html.twig', [
    'cbid'=>$em->createQuery("select sum(p.credit - p.debit) as ss, p.cbid from App\Entity\Euros p  group by p.cbid")->getResult(),
    'cbid_detail'=>$em->createQuery("select p from App\Entity\Euros p ")->getResult(),
    ]);}

    #[Route('/newop', name: 'app_euros_newop', methods: ['GET', 'POST'])]
    public function newop(Request $request,  EntityManagerInterface $em): Response
    {
        $euro = new Euros();
    	
    
    	$form = $this->createForm(EuroType::class, $euro);
    	$form->handleRequest($request);
    	if ($request->isMethod('post') ) {
		$em->persist($euro);
		$em->flush();    	
    	
    	}
    	
    	return $this->render('euros/newop.html.twig', ['form' => $form,]);
    }

    #[Route('/{id}', name: 'app_euros_show', methods: ['GET'])]
    public function show(Euros $euro): Response
    {
        return $this->render('euros/show.html.twig', [
            'euro' => $euro,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_euros_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Euros $euro, EurosRepository $eurosRepository): Response
    {
        $form = $this->createForm(EurosType::class, $euro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eurosRepository->save($euro, true);

            return $this->redirectToRoute('app_euros_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('euros/edit.html.twig', [
            'euro' => $euro,
            'form' => $form,
        ]);
    }

    
    
	 
	 
    
}

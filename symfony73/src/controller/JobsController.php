<?php

namespace App\Controller;

use App\Entity\Jobs;
use App\Form\JobsForm;
use App\Repository\JobsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/jobs')]
final class JobsController extends AbstractController
{
    #[Route(name: 'app_jobs_index', methods: ['GET'])]
    public function index(JobsRepository $jobsRepository): Response
    {
        return $this->render('jobs/index.html.twig', [
            'jobs' => $jobsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_jobs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $job = new Jobs();
        $form = $this->createForm(JobsForm::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($job);
            $entityManager->flush();

            return $this->redirectToRoute('app_jobs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('jobs/new.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jobs_show', methods: ['GET'])]
    public function show(Jobs $job): Response
    {
        return $this->render('jobs/show.html.twig', [
            'job' => $job,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_jobs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Jobs $job, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JobsForm::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_jobs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('jobs/edit.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jobs_delete', methods: ['POST'])]
    public function delete(Request $request, Jobs $job, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$job->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($job);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_jobs_index', [], Response::HTTP_SEE_OTHER);
    }
}

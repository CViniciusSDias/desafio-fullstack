<?php

namespace App\Controller;

use App\Repository\ProfessorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProfessoresController extends AbstractController
{
    /**
     * @var ProfessorRepository
     */
    private $repository;

    public function __construct(ProfessorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/professores", name="professores")
     */
    public function index()
    {
        return new JsonResponse($this->repository->findAll());
    }
}

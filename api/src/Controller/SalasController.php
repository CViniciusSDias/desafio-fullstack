<?php

namespace App\Controller;

use App\Repository\SalaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SalasController extends AbstractController
{
    /**
     * @var SalaRepository
     */
    private $repository;

    public function __construct(SalaRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/salas", name="salas")
     */
    public function index()
    {
        return new JsonResponse($this->repository->findAll());
    }
}

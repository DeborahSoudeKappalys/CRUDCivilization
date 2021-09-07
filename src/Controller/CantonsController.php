<?php

namespace App\Controller;

use App\Entity\Cantons;
use App\Repository\CantonsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class CantonsController extends AbstractController
{
    private CantonsRepository $repo;

    public function __construct(CantonsRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @Route("/cantons", name="cantons")
     */
    public function index(): Response
    {
        dd($this->repo->findAll());
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CantonsController.php',
            'cantons' => $this->repo->findAll(),
        ]);
    }
}

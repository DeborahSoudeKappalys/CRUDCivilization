<?php

namespace App\Controller;

use App\Entity\Players;
use App\Repository\PlayersRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayersController extends AbstractController
{
    private PlayersRepository $repo;

    public function __construct(PlayersRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @Route("/players/new")
     */
    public function createAction(Request $request) {
        $players = new Players();
        $form = $this->createFormBuilder($players)
            ->add('name', TextType::class)
            ->add('title', TextType::class)
            ->add('color', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $players = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($players);
            $em->flush();
            echo 'Envoyé';
        }
        return $this->render('players/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/players/show", name="players_show")
     */
    public function showAction() {
        $players = $this->getDoctrine()->getRepository(Players::class);
        $players = $players->findAll();
        return $this->render(
            'players/list.html.twig',
            array('players' => $players)
        );
    }

        /**
     * @Route("/players/delete/{id}" , name="players_delete")
     */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $players = $this->getDoctrine()->getRepository(Players::class);
        $players = $players->find($id);
        if (!$players) {
            throw $this->createNotFoundException(
                'Aucun joueur trouvé avec l\'id: ' . $id
            );
        }
        $em->remove($players);
        $em->flush();
        return $this->redirect($this->generateUrl('players_show'));
    }

    /**
     * @Route("/players/edit/{id}", name="players_edit")
     */
    public function updateAction(Request $request, $id) {
        $players = $this->getDoctrine()->getRepository(Players::class);
        $players = $players->find($id);
        if (!$players) {
            throw $this->createNotFoundException(
                'Aucun joueur trouvé avec l\'id: ' . $id
            );
        }
        $form = $this->createFormBuilder($players)
            ->add('name', TextType::class)
            ->add('title', TextType::class)
            ->add('color', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Editer'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $players = $form->getData();
            $em->flush();
            return $this->redirect($this->generateUrl('players_show'));
        }
        return $this->render(
            'players/edit.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/players/{id}")
     */
    public function viewAction($id) {
        $players = $this->getDoctrine()->getRepository(Players::class);
        $players = $players->find($id);
        if (!$players) {
            throw $this->createNotFoundException(
                'Aucun joueur pour l\'id: ' . $id
            );
        }
        return $this->render(
            'players/view.html.twig',
            array('player' => $players)
        );
    }

    /**
     * @Route("/players", name="players")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PlayersController.php',
            'players' => $this->repo->findAll(),
        ]);
    }
}

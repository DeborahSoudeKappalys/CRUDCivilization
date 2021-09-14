<?php

namespace App\Controller;

use App\Entity\Players;
use App\Repository\CantonsRepository;
use App\Repository\PlayersRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;

class PlayersController extends AbstractController
{
    private PlayersRepository $repo;
    private CantonsRepository $cantonRepo;

    public function __construct(PlayersRepository $repo, CantonsRepository $cantonRepo)
    {
        $this->repo = $repo;
        $this->cantonRepo = $cantonRepo;

    }

    /**
     * @Route("/players", name="player_create", methods={"POST"})
     */
    public function create(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $players = new Players();
        try {
            $players->setName($request->request->get('name'));
            $players->setTitle($request->request->get('title'));

            switch ($request->request->get('color')) {
                case '4580ff':
                    $players->setColor('Bleu');
                    break;
                case 'cc2e2e':
                    $players->setColor('Rouge');
                    break;
                case '45df45':
                    $players->setColor('Vert');
                    break;
                case 'bdbd30':
                    $players->setColor('Jaune');
                    break;
            }

            $players->setCounty($this->cantonRepo->findOneBy(['id' => intval($request->request->get('county'))]));
            $em->persist($players);
            $em->flush();
        } catch (\Exception $e) {
            return new JsonResponse([
                'name' => 'Erreur de l\'ajout en base'
            ]);
        }

        return new JsonResponse([
            'name' => $request->request->get('name'),
            'title' => $request->request->get('title'),
            'color' => $request->request->get('color'),
            'county' => intval($request->request->get('county')),
        ]);
    }

    /**
     * @Route("/players/new", name="players_new")
     */
    public function createAction(Request $request) {
        // return new JsonResponse(serialize($request), 200, ['Access-Control-Allow-Origin'=> '*', 'Access-Control-Allow-Headers'=> '*']);

        $players = new Players();
        $form = $this->createFormBuilder($players)
            ->add('name', TextType::class, [
                'label' => 'Nom du joueur :'
            ])
            ->add('title', TextType::class, [
                'label' => 'Titre de noblesse :'
            ])
            ->add('color', ChoiceType::class, [
                'label' => 'Couleur jouée :',
                'choices'  => [
                    'Bleu' => 'Bleu',
                    'Rouge' => 'Rouge',
                    'Vert' => 'Vert',
                    'Jaune' => 'Jaune'
                ]
            ])
            ->add('county', ChoiceType::class, [
                'label' => 'Canton de départ :',
                'choices'  => [
                    'Saint-Etienne-du-Rouvray' => $this->cantonRepo->findOneBy(['id' => 31]),
                    'Eu' => $this->cantonRepo->findOneBy(['id' => 10]),
                    'Saint-Romain-de-Colbosc' => $this->cantonRepo->findOneBy(['id' => 32])
                ]
            ])
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $players = $form->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($players);
                $em->flush();
                $this->addFlash('success', 'Joueur ajouté');
                return $this->redirectToRoute('players_show');
            } catch (\Exception $e) {
                $this->addFlash('echec', 'Echec de l\'ajout');
                return $this->redirectToRoute('players_new');
            }
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
            ->add('color', ChoiceType::class, [
                'label' => 'Couleur jouée :',
                'choices'  => [
                    'Bleu' => 'Bleu',
                    'Rouge' => 'Rouge',
                    'Vert' => 'Vert',
                    'Jaune' => 'Jaune'
                ]
            ])
            ->add('county', ChoiceType::class, [
                'label' => 'Canton de départ :',
                'choices'  => [
                    'Saint-Etienne-du-Rouvray' => $this->cantonRepo->findOneBy(['id' => 31]),
                    'Eu' => $this->cantonRepo->findOneBy(['id' => 10]),
                    'Saint-Romain-de-Colbosc' => $this->cantonRepo->findOneBy(['id' => 32])
                ]
            ])
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

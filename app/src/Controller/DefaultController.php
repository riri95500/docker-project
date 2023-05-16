<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\TodoList;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/default", name="app_default")
     */
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(TodoList::class);
        $todos = $repository->findAll();

        // Faites quelque chose avec les éléments récupérés (par exemple, les transmettre à une vue)

        return $this->render('default/index.html.twig', [
            'todos' => $todos,
        ]);
    }
}

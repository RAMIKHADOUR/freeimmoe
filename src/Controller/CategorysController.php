<?php

namespace App\Controller;

use App\Entity\Categorys;
use App\Form\CategorysType;
use App\Repository\CategorysRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorys')]
class CategorysController extends AbstractController
{
    #[Route('/', name: 'app_categorys_index', methods: ['GET'])]
    public function index(CategorysRepository $categorysRepository): Response
    {
        return $this->render('categorys/index.html.twig', [
            'categorys' => $categorysRepository->findAll(),
        ]);
    }
    #[Route('/{id}', name: 'app_categorys_show', methods: ['GET'])]
    public function show(Categorys $category): Response
    {
        return $this->render('categorys/show.html.twig', [
            'category' => $category,
        ]);
    }
}

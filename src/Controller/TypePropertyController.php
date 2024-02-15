<?php

namespace App\Controller;

use App\Entity\TypeProperty;
use App\Form\TypePropertyType;
use App\Repository\TypePropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/types')]
class TypePropertyController extends AbstractController
{
    #[Route('/', name: 'app_type_property_index', methods: ['GET'])]
    public function index(TypePropertyRepository $typePropertyRepository): Response
    {
        return $this->render('type_property/index.html.twig', [
            'type_properties' => $typePropertyRepository->findAll(),
        ]);
    }

   

    #[Route('/{id}', name: 'app_type_property_show', methods: ['GET'])]
    public function show(TypeProperty $typeProperty): Response
    {
        return $this->render('type_property/show.html.twig', [
            'type_property' => $typeProperty,
        ]);
    }

}

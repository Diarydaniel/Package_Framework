<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProfesseurRepository;

class ListeProfesseurController extends AbstractController
{
    #[Route('/liste_professeur', name: 'app_liste_professeur')]
    public function index(ProfesseurRepository $professeursRepository): Response
    {
        // Recuper les liste des Proffesseurs
        $professeurs = $professeursRepository->findAll();

        return $this->render('liste_professeur/listeProfesseurs.html.twig', [
            'professeurs' => $professeurs,
        ]);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\EtudiantRepository;

class ListeEtudiantController extends AbstractController
{
    #[Route('/liste_etudiants', name: 'app_etudiant')]
    public function index(EtudiantRepository $etudiantRepository): Response
    {
        // Récupérer tous les étudiants depuis la base de données
        $etudiants = $etudiantRepository->findAll();

        // Passer les étudiants à la vue Twig
        return $this->render('etudiant/listeEtudiant.html.twig', [
            'etudiants' => $etudiants,
        ]);
    }
}
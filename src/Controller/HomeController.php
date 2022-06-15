<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\RubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/rubrique', name: 'rubrique')]
    public function index(RubriqueRepository $repo): Response
    {
        $rubriques = $repo->findBy(array('rubrique' => null));
        
        return $this->render('home/rubrique.html.twig', [
            'rubrique' => $rubriques,
        ]);
    }

    #[Route('/sousRubrique/{id}', name: 'sousRubrique')]
    public function sousRubrique(RubriqueRepository $repo2, $id): Response
    {    
        $ssRub = $repo2->findBy(array('rubrique' => $id ));

        return $this->render('home/sousRubrique.html.twig', [
            'sousRubrique' => $ssRub,       
        ]);
    }

    #[Route('/produits/{id}', name: 'produit')]
    public function produits(ProduitRepository $repo3, $id): Response
    {    
        $produit = $repo3->findBy(array('rubrique' => $id ));

        return $this->render('home/produit.html.twig', [
            'produit' => $produit,       
        ]);
    }
}

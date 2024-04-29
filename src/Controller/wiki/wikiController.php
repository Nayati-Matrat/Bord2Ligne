<?php

namespace App\Controller\wiki;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
Use App\Entity\Poisson;
Use App\Repository\PoissonRepository;


/**
 * @Route("/wiki", name="wiki_")
 */

class wikiController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PoissonRepository $repository): Response
{
    $Poisson1 = $repository->findAll();
    

    
        return $this->render('wiki/index.html.twig', [
            'controller_name' => 'wikiController',
            'Poisson1'=>$Poisson1,
        ]);

    }
    
/**
 * @Route("/poisson", name="details1")
 */
public function details1(PoissonRepository $repository): Response
{
    $Poisson2 = $repository->findAll();

    return $this->render('wiki/details1.html.twig' , [
        'controller_name' => 'wikiController',
            'Poisson2'=>$Poisson2,
    ]);
    
    
}
    
}
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
    $Poissonhabledeheckel = $repository->findAll();
    

    
        return $this->render('wiki/index.html.twig', [
            'controller_name' => 'wikiController',
            'poissonabledeheckel'=>$Poissonhabledeheckel,
        ]);

    }

    
}
<?php

namespace App\Controller\wiki;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PoissonAbledeheckelRepository;
use App\Repository\PoissonSpirlinRepository;

/**
 * @Route("/wiki", name="wiki_")
 */

class wikiController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PoissonAbledeheckelRepository $repository,PoissonSpirlinRepository $repository2): Response
{
    $Poissonhabledeheckel = $repository->findAll();
    $PoissonSpirlin = $repository2->findAll();

    
        return $this->render('wiki/index.html.twig', [
            'controller_name' => 'wikiController',
            'poissonabledeheckel'=>$Poissonhabledeheckel,
            'poissonspirlin'=> $PoissonSpirlin
        ]);

    }

    
}
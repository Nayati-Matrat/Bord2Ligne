<?php

namespace App\Controller\wiki;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PoissonAbledeheckelRepository;

/**
 * @Route("/wiki", name="wiki_")
 */

class wikiController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PoissonAbledeheckelRepository $repository): Response
{
    $test = $repository->findAll();
    dd($test);

    
        return $this->render('wiki/index.html.twig', [
            'controller_name' => 'wikiController',
        ]);
    }
}
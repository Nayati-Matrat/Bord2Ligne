<?php

namespace App\Controller\wiki;

use App\Entity\PoissonAbledeheckel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;

/**
 * @Route("/wiki", name="wiki_")
 */

class wikiController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ArticleRepository $articleRepository): Response
    {

        

        $articles = $articleRepository->findAll();
        
        return $this->render('wiki/index.html.twig', [
            'controller_name' => 'wikiController',
            'articles'=> $articles
        ]);
    }
}

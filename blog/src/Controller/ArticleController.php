<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index(): Response
    {
        //TODO LIST ARTICLES

        $articles = 'This is where your job begins.';

        return $this->render('articles/articles.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/articles/{id}/show", name="articles_show")
     */
    public function show(): Response
    {
        //TODO SHOW ONE ARTICLE
        //AIDE : https://symfony.com/doc/current/SensioFrameworkExtraBundle/annotations/converters.html

        return new Response('OK');
    }

    /**
     * @Route("/articles/{id}/delete", name="articles_delete")
     */
    public function delete(): Response
    {
        //TODO DELETE ONE ARTICLE

        return new Response('OK');
    }
}

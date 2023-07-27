<?php

namespace App\Controller;

use App\Entity\Snippet;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SnippetController extends AbstractController
{
    #[Route('/snippet/{id}', name: 'show_code')]
    public function index(
        Snippet $snippet,
        Request $request
    ): Response
    {
        return $this->render('snippet/snippet.html.twig', [
            'snippet' => $snippet,
        ]);
    }
}

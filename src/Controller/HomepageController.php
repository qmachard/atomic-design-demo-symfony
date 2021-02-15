<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Article;
use App\Normalizer\ArticleNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @var ArticleNormalizer
     */
    private $articleNormalizer;

    public function __construct(ArticleNormalizer $articleNormalizer)
    {
        $this->articleNormalizer = $articleNormalizer;
    }

    /**
     * @Route(path="/", name="homepage")
     *
     * @return Response
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findBy([], ['title' => 'asc'], 5);

        return $this->render('pages/homepage.html.twig', [
            'items' => array_map(function (Article $article) {
                return $this->articleNormalizer->normalize($article, ArticleNormalizer::FORMAT_CARD);
            }, $articles),
        ]);
    }
}

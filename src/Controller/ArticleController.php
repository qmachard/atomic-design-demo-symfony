<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Article;
use App\Normalizer\ArticleNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/articles")
 */
class ArticleController extends AbstractController
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
     * @Route(path="/", name="article_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        return $this->render('pages/article/index.html.twig', [
            'articles' => array_map(function (Article $article) {
                return $this->articleNormalizer->normalize($article, ArticleNormalizer::FORMAT_CARD);
            }, $articles),
        ]);
    }

    /**
     * @Route(path="/{article}", name="article_view")
     *
     * @param Article $article
     *
     * @return Response
     */
    public function view(Article $article): Response
    {
        //$articles = $this->getDoctrine()
        //    ->getRepository(Article::class)
        //    ->findRelated($article);

        return $this->render('pages/article/view.html.twig', [
            'article' => $article,
            // 'articles' => []
        ]);
    }
}

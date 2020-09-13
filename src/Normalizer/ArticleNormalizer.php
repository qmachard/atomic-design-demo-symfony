<?php

declare(strict_types=1);

namespace App\Normalizer;

use App\Entity\Article;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ArticleNormalizer implements NormalizerInterface
{
    const FORMAT_CARD = 'format_card';

    /** @var UrlGeneratorInterface */
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param Article $object
     *
     * @inheritDoc
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        if (self::FORMAT_CARD === $format) {
            return [
                'title' => $object->getTitle(),
                'image' => [
                    'src' => $object->getImage(),
                    'alt' => '',
                ],
                'excerpt' => $object->getExcerpt(),
                'link' => $this->urlGenerator->generate('article_view', [
                    'article' => $object->getId(),
                ]),
            ];
        }

        return [];
    }

    public function supportsNormalization($data, string $format = null)
    {
        return $data instanceof Article;
    }
}

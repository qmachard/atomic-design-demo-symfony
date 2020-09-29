<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\organisms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class CarouselComponent extends Component
{
    public function getName(): string
    {
        return 'Organisms|Carousel';
    }

    public function getStories(): array
    {
        return [
            'Default' => 'default',
        ];
    }

    public function default(): string
    {
        $parts = [];

        $parts[] = $this->render('components/organisms/carousel/carousel.html.twig', [
            'props' => [
                'items' => [
                    [
                        'title' => 'Lorem Ipsum',
                        'image' => [
                            'src' => 'https://images.unsplash.com/photo-1519200566043-99f14d08fcf9?auto=format&fit=crop&w=600&q=80',
                            'alt' => 'Django',
                        ],
                        'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis eros, sodales venenatis arcu non, consectetur laoreet est.",
                        'link' => '#',
                    ],
                    [
                        'title' => 'Dolor sit amet',
                        'image' => [
                            'src' => 'https://images.unsplash.com/photo-1475331728068-c4ca48823b97?auto=format&fit=crop&w=600&q=80',
                            'alt' => 'Django 2',
                        ],
                        'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis eros, sodales venenatis arcu non, consectetur laoreet est.",
                        'link' => '#',
                    ],
                    [
                        'title' => 'Consectetur',
                        'image' => [
                            'src' => 'https://images.unsplash.com/photo-1507228060299-33b5fcb63bc6?auto=format&fit=crop&w=600&q=80',
                            'alt' => 'Django 3',
                        ],
                        'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis eros, sodales venenatis arcu non, consectetur laoreet est.",
                        'link' => '#',
                    ],
                    [
                        'title' => 'Tempor incididunt',
                        'image' => [
                            'src' => 'https://images.unsplash.com/photo-1548178414-5d8d2a48cc0e?auto=format&fit=crop&w=600&q=80',
                            'alt' => 'Django 4',
                        ],
                        'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis eros, sodales venenatis arcu non, consectetur laoreet est.",
                        'link' => '#',
                    ],
                ]
            ],
        ]);

        $parts[] = '
<pre style="margin: 30px 15px 15px 15px; background: #333; color: #FFF; padding: 15px; border-radius: 3px;">
// ArticleController.php
$articles = array_map(function (Article $article) {
    return $this->articleNormalizer->normalize($article, ArticleNormalizer::FORMAT_CARD);
}, $articles);
</pre>';

        $parts[] = '
<pre style="margin: 15px; background: #333; color: #FFF; padding: 15px; border-radius: 3px;">
{# homepage.html.twig #}
{% include \'components/organisms/carousel/carousel.html.twig\' with {
    props: {
        items: articles,
    },
} %}
</pre>';

        return join('', $parts);
    }
}

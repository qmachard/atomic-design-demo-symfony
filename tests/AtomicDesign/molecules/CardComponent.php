<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\molecules;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class CardComponent extends Component
{
    public function getName(): string
    {
        return 'Molecules|Card';
    }

    public function getStories(): array
    {
        return [
            'Default' => 'default',
        ];
    }

    public function default(): string
    {
        return $this->render('components/molecules/card/card.html.twig', [
            'props' => [
                'image' => [
                    'src' => 'https://images.unsplash.com/photo-1475331728068-c4ca48823b97?auto=format&fit=crop&w=600&q=80',
                    'alt' => '',
                ],
                'title' => 'Ma carte',
                'link' => '#',
                'excerpt' => 'Ceci n\'est pas une carte à jouer !'
            ]
        ]);
    }
}

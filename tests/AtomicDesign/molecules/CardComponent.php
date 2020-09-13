<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\molecules;

use App\Tests\AtomicDesign\atoms\ImageComponent;
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
                'image' => ImageComponent::DEFAULT_PROPS,
                'title' => 'Ma carte',
                'link' => '#',
                'excerpt' => 'Ceci n\'est pas une carte à jouer !'
            ]
        ]);
    }
}

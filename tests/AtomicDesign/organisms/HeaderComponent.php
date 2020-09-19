<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\organisms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class HeaderComponent extends Component
{
    public function getName(): string
    {
        return 'Organisms|Header';
    }

    public function getStories(): array
    {
        return [
            'Default' => 'default',
            ' + Back Link' => 'backLink',
        ];
    }

    public function default(): string
    {
        return $this->render('components/organisms/header/header.html.twig');
    }

    public function backLink(): string
    {
        return $this->render('components/organisms/header/header.html.twig', [
            'props' => [
                'back' => [
                    'href' => '#',
                    'title' => 'Lorem ipsum',
                ],
            ],
        ]);
    }
}

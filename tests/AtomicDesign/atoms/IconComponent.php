<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\atoms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class IconComponent extends Component
{
    public function getName(): string
    {
        return 'Atoms|Icon';
    }

    public function getStories(): array
    {
        return [
            'Icons' => 'icons',
        ];
    }

    public function icons(): string
    {
        $icons = ['arrow'];
        $renders = [];

        foreach ($icons as $icon) {
            $renders[] = $this->render('components/atoms/icon/icon.html.twig', [
                'props' => [
                    'icon' => $icon,
                ],
            ]);
        }

        return implode('', $renders);
    }
}

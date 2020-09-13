<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\atoms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class ButtonComponent extends Component
{
    const COLORS = [null, 'primary', 'secondary'];

    public function getName(): string
    {
        return 'Atoms|Button';
    }

    public function getStories(): array
    {
        return [
            'Button' => 'button',
            'Link' => 'link'
        ];
    }

    public function button(): string
    {
        $renders = [];

        foreach (self::COLORS as $color) {
            $renders[] = $this->render('components/atoms/button/button.html.twig', [
                'props' => [
                    'label' => 'This is a button ' . $color,
                    'color' => $color,
                ],
            ]);
        }

        return implode(' ', $renders);
    }

    public function link(): string
    {
        $renders = [];

        foreach (self::COLORS as $color) {
            $renders[] = $this->render('components/atoms/button/button.html.twig', [
                'props' => [
                    'link' => '#',
                    'label' => 'This is a link ' . $color,
                    'color' => $color,
                ],
            ]);
        }

        return implode(' ', $renders);
    }
}

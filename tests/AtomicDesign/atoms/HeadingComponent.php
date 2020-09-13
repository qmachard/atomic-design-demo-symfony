<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\atoms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class HeadingComponent extends Component
{
    const LEVELS = [1, 2];

    public function getName(): string
    {
        return 'Atoms|Heading';
    }

    public function getStories(): array
    {
        return [
            'Default' => 'default',
        ];
    }

    public function default(): string
    {
        $renders = [];

        foreach (self::LEVELS as $level) {
            $renders[] = $this->render('components/atoms/heading/heading.html.twig', [
                'props' => [
                    'level' => $level,
                    'title' => 'Lorem ipsum ' . $level,
                ],
            ]);
        }

        return implode('', $renders);
    }
}

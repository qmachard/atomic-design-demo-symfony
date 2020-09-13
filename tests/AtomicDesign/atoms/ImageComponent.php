<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\atoms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class ImageComponent extends Component
{
    public function getName(): string
    {
        return 'Atoms|Image';
    }

    public function getStories(): array
    {
        return [
            'Default' => 'default',
            'Rounded' => 'rounded',
        ];
    }

    public function default(): string
    {
        return $this->render('components/atoms/image/image.html.twig', [
            'props' => [
                'src' => 'http://placekitten.com/1024/768',
                'alt' => 'Chatons mignons',
            ],
        ]);
    }

    public function rounded(): string
    {
        return $this->render('components/atoms/image/image.html.twig', [
            'props' => [
                'src' => 'http://placekitten.com/1024/768',
                'alt' => 'Chatons mignons',
                'rounded' => true
            ],
        ]);
    }
}

<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\organisms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class FooterComponent extends Component
{
    public function getName(): string
    {
        return 'Organisms|Footer';
    }

    public function getStories(): array
    {
        return [
            'default' => 'Default',
        ];
    }

    public function default(): string
    {
        return $this->render('components/organisms/footer/footer.html.twig');
    }
}

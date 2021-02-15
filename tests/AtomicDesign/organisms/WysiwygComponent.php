<?php

declare(strict_types=1);

namespace App\Tests\AtomicDesign\organisms;

use QuentinMachard\Bundle\AtomicDesignBundle\Model\Component;

class WysiwygComponent extends Component
{
    public function getName(): string
    {
        return 'Organism|Wysiwyg';
    }

    public function getStories(): array
    {
        return [
            'Default' => 'default',
        ];
    }

    public function default(): string
    {
        $body = '<h1>HTML Ipsum Presents</h1>
        
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas.
                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et
                sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet,
                wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
        
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ul>
        
            <h2>Lorem ipsum</h2>
        
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor
                quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                
            <p><img src="http://placekitten.com/1200/800" alt="Ceci est un chat"></p>
        
            <h3>Lorem ipsum</h3>
        
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor
                quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        
            <ul>
                <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
            </ul>
        
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor
                quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                ultricies mi vitae est. Mauris placerat eleifend leo.</p>';

        return $this->render('components/organisms/wysiwyg/wysiwyg.html.twig', [
            'props' => [
                'body' => $body,
            ],
        ]);
    }
}

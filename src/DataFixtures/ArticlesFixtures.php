<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle('Lorem ipsum ' . $i );
            $article->setBody('<p>Lorem ipsum dolor sit amet</p>');
            $article->setExcerpt('Lorem ipsum dolor sit amet');
            $article->setImage('https://images.unsplash.com/photo-1519200566043-99f14d08fcf9?auto=format&fit=crop&w=600&q=80');

            $manager->persist($article);
        }

        $manager->flush();
    }
}

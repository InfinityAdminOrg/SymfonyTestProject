<?php

namespace App\DataFixtures\Product;

use App\Entity\Product\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(
        ObjectManager $manager
    ): void {
        for ($i = 0; $i < 100; $i++) {
            $product = new Product();
            $product->setTitle('Game Product '.$i);

            $manager->persist($product);
        }

        $manager->flush();
    }
}
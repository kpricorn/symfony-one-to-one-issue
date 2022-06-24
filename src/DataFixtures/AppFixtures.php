<?php

namespace App\DataFixtures;

use App\Entity\A;
use App\Entity\B;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i <= 2; $i++) {
            $a = new A();
            $a->b = new B();
            $manager->persist($a->b);
            $manager->persist($a);
        }

        $manager->flush();
    }
}

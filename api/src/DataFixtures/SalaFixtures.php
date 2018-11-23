<?php

namespace App\DataFixtures;

use App\Entity\Sala;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SalaFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $sala = new Sala();
        $sala->setNumero(201);
        $manager->persist($sala);

        $sala = new Sala();
        $sala->setNumero(504);
        $manager->persist($sala);

        $manager->flush();
    }
}

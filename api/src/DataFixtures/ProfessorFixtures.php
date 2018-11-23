<?php

namespace App\DataFixtures;

use App\Entity\Professor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProfessorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $professor = new Professor();
        $professor->setNome('Vinicius Dias');
        $manager->persist($professor);

        $professor = new Professor();
        $professor->setNome('João da Silva');
        $manager->persist($professor);

        $manager->flush();
    }
}

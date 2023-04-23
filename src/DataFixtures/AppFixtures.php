<?php

namespace App\DataFixtures;

use App\Entity\Eenseignant;
use App\Factory\EenseignantFactory;
use App\Factory\EtudiantFactory;
use App\Factory\FiliereFactory;
use App\Factory\ModuleFactory;
use App\Factory\NoteFactory;
use App\Factory\SemestreFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        EenseignantFactory::createMany(25);
        EtudiantFactory::createMany(25);
        FiliereFactory::createMany(25);
        ModuleFactory::createMany(25);
        NoteFactory::createMany(25);
        SemestreFactory::createMany(25);
        UserFactory::createOne();






        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Parking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
/**
 * Les fixtures permettent de créer un jeu de données de développement
 * La commande pour lancer les fixtures : (bin/console doctrine:fixtures:load)
 * A l'intérieur, on fera en sorte de faire des boucles pour créer des
 * instances des entités dont on veut des exemples et les faire persister
 */

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 5; $i++) {

            $parking = new Parking();
            $parking->setName('Name ' . $i)
                    ->setZipCode('69003')
                    ->setLongtitude('4.85')
                    ->setLatitude('45.75')
                    ->setAddress($i . ' Road of Liberty');
            $manager->persist($parking);

            }
        $manager->flush();
    }
}

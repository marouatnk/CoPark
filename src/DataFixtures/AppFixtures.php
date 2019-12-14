<?php

namespace App\DataFixtures;

use App\Entity\Parking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
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
            $parking->setname('Name ' . $i)
                    ->setZipCode('69003')
                    ->setLongitude('4.85')
                    ->setCountry('Lyon')
                    ->setLatitude('45.75')
                    ->setAddress($i . ' Rue de La liberté');
            $manager->persist($parking);

            }
        $manager->flush();
    }
}

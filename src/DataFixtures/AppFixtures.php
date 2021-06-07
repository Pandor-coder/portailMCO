<?php

namespace App\DataFixtures;



use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\FamilleOutils;
use App\Entity\Message;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        echo "chargement des fixtures pour l'entité familleOutil \n***\n\n";
        $this->load_familleOutils($manager);
        echo "chargement des fixtures pour l'entité message \n***\n\n";
        $this->load_message($manager);
        $manager->flush();
    }


    public function load_familleOutils(ObjectManager $manager)
    {
        $famille = [
            ['nom' => 'Heat'         , 'libelle' => "Portails de maintenance"             , 'descriptif' => "Madrid"],
            ['nom' => 'TracCC'       , 'libelle' => "Référentiels équipements TracCC"     , 'descriptif' => "Turin"],
            ['nom' => 'Trac'         , 'libelle' => "Suivi de devloppement"               , 'descriptif' => "Barcelone"],
            ['nom' => 'ProjHeat'     , 'libelle' => "Heat"                                , 'descriptif' => "Paris"],
            ['nom' => 'Test'         , 'libelle' => "Famille de test"                     , 'descriptif' => "Manchester"],
            ['nom' => 'Thf'          , 'libelle' => "Réferentiel Thermique à flamme"      , 'descriptif' => "Madrid"],
            ['nom' => 'Présentations', 'libelle' => "Présentation"                        , 'descriptif' => "Turin"],
            ['nom' => 'TracCCrepli'  , 'libelle' => "Repli référentiels équipement TracCC", 'descriptif' => "Barcelone"],

        ];

        foreach ($famille as $f) {
            $new_familleOutil = new FamilleOutils();
            $new_familleOutil->setDescriptif($f['descriptif']);
            $new_familleOutil->setNom($f['nom']);
            $new_familleOutil->setLibelle($f['libelle']);
            $manager->persist($new_familleOutil);
        }
        $manager->flush();
    }
    public function load_message(ObjectManager $manager)
    {
        $message = [
            ['actif' => '0' , 'message' => "Portails de maintenance"],
        ];

        foreach ($message as $m) {
            $new_mesage = new Message();
            $new_mesage->setActif($m['actif']);
            $new_mesage->setMessage($m['message']);
            $manager->persist($new_mesage);
        }
        $manager->flush();
    }
}
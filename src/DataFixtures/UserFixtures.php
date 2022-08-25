<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $names = ['Eleftheria', 'Gennadios', 'Lysimachos'];
        foreach ($names as $name) {
            $user = new User();
            $user->setName($name);
            $manager->persist($user);
        }

        $manager->flush();
    }
}

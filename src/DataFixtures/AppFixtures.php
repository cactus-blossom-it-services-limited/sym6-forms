<?php

namespace App\DataFixtures;

//use App\Entity\User;
use App\Factory\ProductFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 5 users
//        for ($i = 0; $i < 5; $i++) {
//            $user = new User();
//            $permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
//            $rand_string = substr(str_shuffle($permitted_chars), 0, 5);
//
//            $user->setEmail($rand_string.'@example.com');
//            $user->setFirstName(ucwords($rand_string));
//            $user->setRoles([]);
//            $manager->persist($user);
//        }

//        $manager->flush();
        UserFactory::createOne([
                'email' => 'abraca_admin@example.com',
                'roles' => [],
                'firstName' => 'Andrew'
        ]);

        UserFactory::createMany(6);
        ProductFactory::createMany(8);
    }
}

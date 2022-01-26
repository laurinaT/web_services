<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\entity\Customer;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);$

        $faker = Faker\Factory::create();
        for($i = 0; $i < 50; $i++) {
            $customer = new Customer();
            $customer -> setFirstname($faker -> firstName);
            $customer -> setLastname($faker -> lastName);
            $customer -> setEmail($faker -> email);
            $customer -> setPhoneNumber($faker -> phoneNumber);
            
            $manager->persist($customer);
        }

        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Propertys;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    private Generator $faker;
    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i <10 ; $i++) {
            $property = new Propertys();
            $property
            ->setCode($this->faker->uuid())
            ->setSurface($this->faker->randomFloat())
            ->setDescription($this->faker->text(50))
            ->setPrix($this->faker->randomFloat(2))
            ->setChambres($this->faker->numberBetween(1,5))
            ->setSalleBains($this->faker->numberBetween(1,2))
            ->setEtages($this->faker->numberBetween(1,2))
            ->setNumeroEtage($this->faker->numberBetween(1,20))
            ->setAdresse($this->faker->address())
            ->setVille($this->faker->city())
            ->setCodePostale($this->faker->randomNumber(5, true))
            ->setRegion($this->faker->region())
            ->setInternet($this->faker->boolean())
            ->setBalcon($this->faker->boolean())
            ->setGarage($this->faker->boolean())
            ->setGym($this->faker->boolean())
            ->setPiscine($this->faker->boolean())
            ->setCamera($this->faker->boolean())
            ->setImage($this->faker->imageUrl(640, 480, 'animals', true));
    
            $manager->persist($property);
        }
        

        $manager->flush();
    }
}

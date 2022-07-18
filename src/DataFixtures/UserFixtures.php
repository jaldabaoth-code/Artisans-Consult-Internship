<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private UserPasswordEncoderInterface $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        //for ROLE_ADMIN
        $user = new User();
        $user->setUsername('admin');
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'admin'));
        $manager->persist($user);
        $manager->flush();
    }
}

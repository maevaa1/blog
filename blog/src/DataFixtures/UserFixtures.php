<?php

namespace App\DataFixtures;

use App\Entity\User;

use Doctrine\Persistence\ObjectManager;

use Doctrine\Bundle\FixturesBundle\Fixture;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public const ADMIN = 'admin';
    public const USER = 'user';

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();

        $admin
            ->setEmail('admin@contact.com')
            ->setPassword(
                $this->passwordEncoder->encodePassword($admin, 'admin123')
            )
            ->setRoles(User::ROLE_ADMIN)
        ;


        $manager->persist($admin);

        $user = new User();

        $user
            ->setEmail('user@contact.com')
            ->setPassword(
                $this->passwordEncoder->encodePassword($user, 'user123')
            )
            ->setRoles(User::ROLE_USER)
        ;

        $manager->persist($user);

        $manager->flush();

        $user2 = new User();

        $user2
            ->setEmail('user2@contact.com')
            ->setPassword(
                $this->passwordEncoder->encodePassword($user2, 'user456')
            )
            ->setRoles(User::ROLE_USER)
        ;

        $manager->persist($user2);

        $manager->flush();

        $this->addReference(self::ADMIN, $admin);
        $this->addReference(self::USER, $user);
    }
}

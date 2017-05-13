<?php

/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 13/05/17
 * Time: 11:14
 */
namespace AdminBundle\Controller\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Umbrella\UserBundle\Entity\User;

/**
 * Class LoadUserData
 * @package AdminBundle\Controller\DataFixtures\ORM
 */
class LoadUserData implements FixtureInterface, ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        
        $jsonData = json_decode(file_get_contents(__DIR__ . '/../users.json'));
        
        foreach ($jsonData as $jsonRow) {
            $user = new User();
            $user->firstname = $jsonRow[0];
            $user->lastname = $jsonRow[1];

            $user->username = strtolower($user->firstname)[0] . strtolower($user->lastname);
            $user->email = strtolower($user->firstname) . '.' . strtolower($jsonRow[1]) . '@mail.com';

            $user->password = $this->container->get('security.password_encoder')->encodePassword($user, $user->username);
            $user->active = true;

            $manager->persist($user);
        }

        $manager->flush();
    }
}
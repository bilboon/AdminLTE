<?php
/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 14/05/17
 * Time: 20:00
 */

namespace AdminBundle\Controller\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Umbrella\UserBundle\Entity\Browser;

/**
 * Class LoadBrowserData
 * @package AdminBundle\Controller\DataFixtures\ORM
 */
class LoadBrowserData implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $browser = new Browser();
        $browser->name = 'Internet Explorer';
        $browser->vendor = 'Microsoft';
        $browser->lastRelease = '12.0';
        $manager->persist($browser);

        $browser = new Browser();
        $browser->name = 'Mozilla Firefox';
        $browser->vendor = 'Firefox';
        $browser->lastRelease = '15.8';
        $manager->persist($browser);

        $browser = new Browser();
        $browser->name = 'Safari';
        $browser->vendor = 'Apple';
        $browser->lastRelease = '5.0';
        $manager->persist($browser);

        $browser = new Browser();
        $browser->name = 'Google chrome';
        $browser->vendor = 'Google';
        $browser->lastRelease = '17.8';
        $manager->persist($browser);

        $manager->flush();
    }
}
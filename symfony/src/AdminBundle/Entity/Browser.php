<?php
/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 14/05/17
 * Time: 19:54
 */

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Umbrella\AdminBundle\Entity\Lib\BaseEntity;

/**
 * Class Browser
 * @package AdminBundle\Entity\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="browser")
 */
class Browser extends BaseEntity
{
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    public $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    public $vendor;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    public $lastRelease;
}
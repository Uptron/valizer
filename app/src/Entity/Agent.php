<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="staffs")
 */
class staff
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="string")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;
}
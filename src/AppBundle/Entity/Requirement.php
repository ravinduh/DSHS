<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requirement
 *
 * @ORM\Table(name="requirement")
 * @ORM\Entity
 */
class Requirement
{
    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=1000, nullable=false)
     */
    private $details;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set details
     *
     * @param string $details
     *
     * @return Requirement
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

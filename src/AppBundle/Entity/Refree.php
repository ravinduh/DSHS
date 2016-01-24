<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Refree
 *
 * @ORM\Table(name="refree", indexes={@ORM\Index(name="moderator_id_idx", columns={"moderator_id"})})
 * @ORM\Entity
 */
class Refree
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=200, nullable=false)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_nu", type="string", length=45, nullable=true)
     */
    private $contactNu;

    /**
     * @var string
     *
     * @ORM\Column(name="nic", type="string", length=10, nullable=false)
     */
    private $nic;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Moderator
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Moderator")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="moderator_id", referencedColumnName="id")
     * })
     */
    private $moderator;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Refree
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Refree
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set contactNu
     *
     * @param string $contactNu
     *
     * @return Refree
     */
    public function setContactNu($contactNu)
    {
        $this->contactNu = $contactNu;

        return $this;
    }

    /**
     * Get contactNu
     *
     * @return string
     */
    public function getContactNu()
    {
        return $this->contactNu;
    }

    /**
     * Set nic
     *
     * @param string $nic
     *
     * @return Refree
     */
    public function setNic($nic)
    {
        $this->nic = $nic;

        return $this;
    }

    /**
     * Get nic
     *
     * @return string
     */
    public function getNic()
    {
        return $this->nic;
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

    /**
     * Set moderator
     *
     * @param \AppBundle\Entity\Moderator $moderator
     *
     * @return Refree
     */
    public function setModerator(\AppBundle\Entity\Moderator $moderator = null)
    {
        $this->moderator = $moderator;

        return $this;
    }

    /**
     * Get moderator
     *
     * @return \AppBundle\Entity\Moderator
     */
    public function getModerator()
    {
        return $this->moderator;
    }
}

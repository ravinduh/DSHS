<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moderator
 *
 * @ORM\Table(name="moderator")
 * @ORM\Entity
 */
class Moderator
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
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
     * @ORM\Column(name="address", type="string", length=256, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_nu", type="string", length=45, nullable=false)
     */
    private $contactNu;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=true)
     */
    private $email;

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
     * Set name
     *
     * @param string $name
     *
     * @return Moderator
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
     * @return Moderator
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
     * Set address
     *
     * @param string $address
     *
     * @return Moderator
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contactNu
     *
     * @param string $contactNu
     *
     * @return Moderator
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
     * Set email
     *
     * @param string $email
     *
     * @return Moderator
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nic
     *
     * @param string $nic
     *
     * @return Moderator
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
}

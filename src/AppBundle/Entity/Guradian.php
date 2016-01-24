<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guradian
 *
 * @ORM\Table(name="guradian", indexes={@ORM\Index(name="student_id_idx", columns={"student_id"})})
 * @ORM\Entity
 */
class Guradian
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
     * @ORM\Column(name="occupation", type="string", length=128, nullable=false)
     */
    private $occupation;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Student
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Student")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     * })
     */
    private $student;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Guradian
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
     * Set occupation
     *
     * @param string $occupation
     *
     * @return Guradian
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Guradian
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
     * @return Guradian
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\Student $student
     *
     * @return Guradian
     */
    public function setStudent(\AppBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }
}

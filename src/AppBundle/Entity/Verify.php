<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Verify
 *
 * @ORM\Table(name="verify", indexes={@ORM\Index(name="moderator_id_idx", columns={"moderator_id"}), @ORM\Index(name="student_id_idx", columns={"student_id"})})
 * @ORM\Entity
 */
class Verify
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="verified_date", type="date", nullable=false)
     */
    private $verifiedDate;

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
     * @var \AppBundle\Entity\Moderator
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Moderator")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="moderator_id", referencedColumnName="id")
     * })
     */
    private $moderator;



    /**
     * Set verifiedDate
     *
     * @param \DateTime $verifiedDate
     *
     * @return Verify
     */
    public function setVerifiedDate($verifiedDate)
    {
        $this->verifiedDate = $verifiedDate;

        return $this;
    }

    /**
     * Get verifiedDate
     *
     * @return \DateTime
     */
    public function getVerifiedDate()
    {
        return $this->verifiedDate;
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
     * @return Verify
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

    /**
     * Set moderator
     *
     * @param \AppBundle\Entity\Moderator $moderator
     *
     * @return Verify
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

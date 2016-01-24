<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudentHasRequirement
 *
 * @ORM\Table(name="student_has_requirement", indexes={@ORM\Index(name="requirement_id_idx", columns={"requirement_id"}), @ORM\Index(name="moderator_id_idx", columns={"moderator_id"}), @ORM\Index(name="student_id_idx", columns={"student_id"})})
 * @ORM\Entity
 */
class StudentHasRequirement
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="donated_date", type="date", nullable=true)
     */
    private $donatedDate;

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
     * @var \AppBundle\Entity\Requirement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Requirement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="requirement_id", referencedColumnName="id")
     * })
     */
    private $requirement;

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
     * Set donatedDate
     *
     * @param \DateTime $donatedDate
     *
     * @return StudentHasRequirement
     */
    public function setDonatedDate($donatedDate)
    {
        $this->donatedDate = $donatedDate;

        return $this;
    }

    /**
     * Get donatedDate
     *
     * @return \DateTime
     */
    public function getDonatedDate()
    {
        return $this->donatedDate;
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
     * @return StudentHasRequirement
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
     * Set requirement
     *
     * @param \AppBundle\Entity\Requirement $requirement
     *
     * @return StudentHasRequirement
     */
    public function setRequirement(\AppBundle\Entity\Requirement $requirement = null)
    {
        $this->requirement = $requirement;

        return $this;
    }

    /**
     * Get requirement
     *
     * @return \AppBundle\Entity\Requirement
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Set moderator
     *
     * @param \AppBundle\Entity\Moderator $moderator
     *
     * @return StudentHasRequirement
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

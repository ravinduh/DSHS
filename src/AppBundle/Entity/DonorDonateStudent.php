<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonorDonateStudent
 *
 * @ORM\Table(name="donor_donate_student", indexes={@ORM\Index(name="student_id_idx", columns={"student_id"}), @ORM\Index(name="donor_id_idx", columns={"donor_id"})})
 * @ORM\Entity
 */
class DonorDonateStudent
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="donated_date", type="date", nullable=false)
     */
    private $donatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=500, nullable=true)
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
     * @var \AppBundle\Entity\Student
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Student")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     * })
     */
    private $student;

    /**
     * @var \AppBundle\Entity\Donor
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Donor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="donor_id", referencedColumnName="id")
     * })
     */
    private $donor;



    /**
     * Set donatedDate
     *
     * @param \DateTime $donatedDate
     *
     * @return DonorDonateStudent
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
     * Set details
     *
     * @param string $details
     *
     * @return DonorDonateStudent
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

    /**
     * Set student
     *
     * @param \AppBundle\Entity\Student $student
     *
     * @return DonorDonateStudent
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
     * Set donor
     *
     * @param \AppBundle\Entity\Donor $donor
     *
     * @return DonorDonateStudent
     */
    public function setDonor(\AppBundle\Entity\Donor $donor = null)
    {
        $this->donor = $donor;

        return $this;
    }

    /**
     * Get donor
     *
     * @return \AppBundle\Entity\Donor
     */
    public function getDonor()
    {
        return $this->donor;
    }
}

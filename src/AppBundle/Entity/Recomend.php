<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recomend
 *
 * @ORM\Table(name="recomend", indexes={@ORM\Index(name="moderator_id_idx", columns={"moderator_id"}), @ORM\Index(name="student_id_idx", columns={"student_id"})})
 * @ORM\Entity
 */
class Recomend
{
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
     * @return Recomend
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
     * @return Recomend
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

<?php
namespace gav\tateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="subject")
 * @ORM\HasLifecycleCallbacks
 **/
class Subject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @ORM\ManyToOne(targetEntity="Subject")
     * @ORM\JoinColumn(name="subject_id0", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $parent0;
    /**
     * @ORM\ManyToOne(targetEntity="Subject")
     * @ORM\JoinColumn(name="subject_id1", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $parent1;

    public function __toString() {
        return $this->title." (".$this->id.")";
}

    /**
     * Set id
     *
     * @param integer $id
     * @return Subject
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set title
     *
     * @param string $title
     * @return Subject
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Subject
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set parent0
     *
     * @param \gav\tateBundle\Entity\Subject $parent0
     * @return Subject
     */
    public function setParent0(\gav\tateBundle\Entity\Subject $parent0 = null)
    {
        $this->parent0 = $parent0;

        return $this;
    }

    /**
     * Get parent0
     *
     * @return \gav\tateBundle\Entity\Subject 
     */
    public function getParent0()
    {
        return $this->parent0;
    }

    /**
     * Set parent1
     *
     * @param \gav\tateBundle\Entity\Subject $parent1
     * @return Subject
     */
    public function setParent1(\gav\tateBundle\Entity\Subject $parent1 = null)
    {
        $this->parent1 = $parent1;

        return $this;
    }

    /**
     * Get parent1
     *
     * @return \gav\tateBundle\Entity\Subject 
     */
    public function getParent1()
    {
        return $this->parent1;
    }
}

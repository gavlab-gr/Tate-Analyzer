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
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="children0")
     * @ORM\JoinColumn(name="subject_id0", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $parent0;
    /**
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="children1")
     * @ORM\JoinColumn(name="subject_id1", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $parent1;

    /**
     * @ORM\OneToMany(targetEntity="Subject", mappedBy="parent0")
     */
    protected $children0;
    
    /**
     * @ORM\OneToMany(targetEntity="Subject", mappedBy="parent1")
     */
    protected $children1;

    public function __toString() {
        $title = "";
        if($this->parent0 != null && $this->parent1 == null) {
            $title .= $this->parent0. " > ";
        }
        if($this->parent1 != null) {
            $title .= $this->parent1. " > ";
        }
        $title .= $this->title." (".$this->id.")";
        return $title;
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children0 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children1 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add children0
     *
     * @param \gav\tateBundle\Entity\Subject $children0
     *
     * @return Subject
     */
    public function addChildren0(\gav\tateBundle\Entity\Subject $children0)
    {
        $this->children0[] = $children0;

        return $this;
    }

    /**
     * Remove children0
     *
     * @param \gav\tateBundle\Entity\Subject $children0
     */
    public function removeChildren0(\gav\tateBundle\Entity\Subject $children0)
    {
        $this->children0->removeElement($children0);
    }

    /**
     * Get children0
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren0()
    {
        return $this->children0;
    }

    /**
     * Add children1
     *
     * @param \gav\tateBundle\Entity\Subject $children1
     *
     * @return Subject
     */
    public function addChildren1(\gav\tateBundle\Entity\Subject $children1)
    {
        $this->children1[] = $children1;

        return $this;
    }

    /**
     * Remove children1
     *
     * @param \gav\tateBundle\Entity\Subject $children1
     */
    public function removeChildren1(\gav\tateBundle\Entity\Subject $children1)
    {
        $this->children1->removeElement($children1);
    }

    /**
     * Get children1
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren1()
    {
        return $this->children1;
    }
}

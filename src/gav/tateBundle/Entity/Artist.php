<?php
namespace gav\tateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="artist")
 * @ORM\HasLifecycleCallbacks
 **/
class Artist
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=false)
     */
    private $gender;
    /**
     * @var string
     *
     * @ORM\Column(name="dob", type="integer", nullable=true)
     */
    private $dob;
    /**
     * @var string
     *
     * @ORM\Column(name="dod", type="integer", nullable=true)
     */
    private $dod;
    /**
     * @var string
     *
     * @ORM\Column(name="pob", type="string", length=255, nullable=true)
     */
    private $pob;
    /**
     * @var string
     *
     * @ORM\Column(name="pod", type="string", length=255, nullable=true)
     */
    private $pod;
    /**
     * @var string
     *
     * @ORM\Column(name="tateurl", type="string", length=1024, nullable=true)
     */
    private $tateurl;

    public function __construct($id, $name, $gender, $dob, $dod, $pob, $pod, $tateurl) {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->dod = $dod;
        $this->pob = $pob;
        $this->pod = $pod;
        $this->tateurl = $tateurl;


    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Artist
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
     * Set name
     *
     * @param string $name
     * @return Artist
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
     * Set gender
     *
     * @param string $gender
     * @return Artist
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dob
     *
     * @param integer $dob
     * @return Artist
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return integer 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set dod
     *
     * @param integer $dod
     * @return Artist
     */
    public function setDod($dod)
    {
        $this->dod = $dod;

        return $this;
    }

    /**
     * Get dod
     *
     * @return integer 
     */
    public function getDod()
    {
        return $this->dod;
    }

    /**
     * Set pob
     *
     * @param string $pob
     * @return Artist
     */
    public function setPob($pob)
    {
        $this->pob = $pob;

        return $this;
    }

    /**
     * Get pob
     *
     * @return string 
     */
    public function getPob()
    {
        return $this->pob;
    }

    /**
     * Set pod
     *
     * @param string $pod
     * @return Artist
     */
    public function setPod($pod)
    {
        $this->pod = $pod;

        return $this;
    }

    /**
     * Get pod
     *
     * @return string 
     */
    public function getPod()
    {
        return $this->pod;
    }

    /**
     * Set tateurl
     *
     * @param string $tateurl
     * @return Artist
     */
    public function setTateurl($tateurl)
    {
        $this->tateurl = $tateurl;

        return $this;
    }

    /**
     * Get tateurl
     *
     * @return string 
     */
    public function getTateurl()
    {
        return $this->tateurl;
    }
}

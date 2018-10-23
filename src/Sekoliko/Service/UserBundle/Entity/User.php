<?php

namespace App\Sekoliko\Service\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Users
 *
 * @ORM\Table(name="tz_sekoliko_user", uniqueConstraints={@ORM\UniqueConstraint(name="username_canonical_UNIQUE", columns={"username_canonical"}), @ORM\UniqueConstraint(name="email_canonical_UNIQUE", columns={"email_canonical"}), @ORM\UniqueConstraint(name="confirmation_token_UNIQUE", columns={"confirmation_token"})})
 * @UniqueEntity(fields="username", message="Nom d'utilisateur déjà existant")
 * @UniqueEntity(fields="email", message="Email déjà existant")
 * @ORM\Entity(repositoryClass="User")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_firstname", type="string", length=255, nullable=true)
     */
    private $usrFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_lastname", type="string", length=255, nullable=true)
     */
    private $usrLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_address", type="string", length=255, nullable=true)
     */
    private $usrAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usr_date_create", type="datetime", nullable=true)
     */
    private $usrDateCreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usr_date_update", type="datetime", nullable=true)
     */
    private $usrDateUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_phone", type="string", length=45, nullable=true)
     */
    private $usrPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_social", type="string", length=255, nullable=true)
     */
    private $social_count;


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->usrDateCreate = new \DateTime();
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
     * @return string
     */
    public function getUsrFirstname()
    {
        return $this->usrFirstname;
    }

    /**
     * @param string $usrFirstname
     */
    public function setUsrFirstname($usrFirstname)
    {
        $this->usrFirstname = $usrFirstname;
    }

    /**
     * @return string
     */
    public function getUsrLastname()
    {
        return $this->usrLastname;
    }

    /**
     * @param string $usrLastname
     */
    public function setUsrLastname($usrLastname)
    {
        $this->usrLastname = $usrLastname;
    }

    /**
     * @return \DateTime
     */
    public function getUsrDateUpdate()
    {
        return $this->usrDateUpdate;
    }

    /**
     * @param \DateTime $usrDateUpdate
     */
    public function setUsrDateUpdate($usrDateUpdate)
    {
        $this->usrDateUpdate = $usrDateUpdate;
    }

    /**
     * @return string
     */
    public function getUsrAddress()
    {
        return $this->usrAddress;
    }

    /**
     * @param string $usrAddress
     */
    public function setUsrAddress($usrAddress)
    {
        $this->usrAddress = $usrAddress;
    }

    /**
     * @return \DateTime
     */
    public function getUsrDateCreate()
    {
        return $this->usrDateCreate;
    }

    /**
     * @param \DateTime $usrDateCreate
     */
    public function setUsrDateCreate($usrDateCreate)
    {
        $this->usrDateCreate = $usrDateCreate;
    }

    /**
     * @return string
     */
    public function getUsrPhone()
    {
        return $this->usrPhone;
    }

    /**
     * @param string $usrPhone
     */
    public function setUsrPhone($usrPhone)
    {
        $this->usrPhone = $usrPhone;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getUsrFullname()
    {
        return $this->usrFirstname . ' ' . $this->usrLastname;
    }

    /**
     * @param bool $usrIsValid
     */
    public function setUsrIsValid($usrIsValid)
    {
        $this->usrIsValid = $usrIsValid;
    }
    /**
     * @return string
     */
    public function getSocialCount()
    {
        return $this->social_count;
    }

    /**
     * @param string $social_count
     */
    public function setSocialCount($social_count)
    {
        $this->social_count = $social_count;
    }

}
<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="Usuarios", indexes={@ORM\Index(name="defaultArea", columns={"defaultArea"})})
 * @ORM\Entity
 */
class Usuarios
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
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=255, nullable=false)
     */
    private $senha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="firstLogin", type="boolean", nullable=true)
     */
    private $firstlogin;

    /**
     * @var integer
     *
     * @ORM\Column(name="wizardStep", type="integer", nullable=true)
     */
    private $wizardstep;

    /**
     * @var boolean
     *
     * @ORM\Column(name="needPasswdChange", type="boolean", nullable=true)
     */
    private $needpasswdchange;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="apiKey", type="string", length=43, nullable=true)
     */
    private $apikey;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Areas
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Areas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="defaultArea", referencedColumnName="id")
     * })
     */
    private $defaultarea;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Areas", inversedBy="idusuario")
     * @ORM\JoinTable(name="usuarios_areas",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idArea", referencedColumnName="id")
     *   }
     * )
     */
    private $idarea;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Grupos", inversedBy="idusuario")
     * @ORM\JoinTable(name="usuarios_grupos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
     *   }
     * )
     */
    private $idgrupo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idarea = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idgrupo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set login
     *
     * @param string $login
     * @return Usuarios
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Usuarios
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set firstlogin
     *
     * @param boolean $firstlogin
     * @return Usuarios
     */
    public function setFirstlogin($firstlogin)
    {
        $this->firstlogin = $firstlogin;

        return $this;
    }

    /**
     * Get firstlogin
     *
     * @return boolean 
     */
    public function getFirstlogin()
    {
        return $this->firstlogin;
    }

    /**
     * Set wizardstep
     *
     * @param integer $wizardstep
     * @return Usuarios
     */
    public function setWizardstep($wizardstep)
    {
        $this->wizardstep = $wizardstep;

        return $this;
    }

    /**
     * Get wizardstep
     *
     * @return integer 
     */
    public function getWizardstep()
    {
        return $this->wizardstep;
    }

    /**
     * Set needpasswdchange
     *
     * @param boolean $needpasswdchange
     * @return Usuarios
     */
    public function setNeedpasswdchange($needpasswdchange)
    {
        $this->needpasswdchange = $needpasswdchange;

        return $this;
    }

    /**
     * Get needpasswdchange
     *
     * @return boolean 
     */
    public function getNeedpasswdchange()
    {
        return $this->needpasswdchange;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Usuarios
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuarios
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
     * Set apikey
     *
     * @param string $apikey
     * @return Usuarios
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;

        return $this;
    }

    /**
     * Get apikey
     *
     * @return string 
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * Set defaultarea
     *
     * @param \Zips\Bundle\MainBundle\Entity\Areas $defaultarea
     * @return Usuarios
     */
    public function setDefaultarea(\Zips\Bundle\MainBundle\Entity\Areas $defaultarea = null)
    {
        $this->defaultarea = $defaultarea;

        return $this;
    }

    /**
     * Get defaultarea
     *
     * @return \Zips\Bundle\MainBundle\Entity\Areas 
     */
    public function getDefaultarea()
    {
        return $this->defaultarea;
    }

    /**
     * Add idarea
     *
     * @param \Zips\Bundle\MainBundle\Entity\Areas $idarea
     * @return Usuarios
     */
    public function addIdarea(\Zips\Bundle\MainBundle\Entity\Areas $idarea)
    {
        $this->idarea[] = $idarea;

        return $this;
    }

    /**
     * Remove idarea
     *
     * @param \Zips\Bundle\MainBundle\Entity\Areas $idarea
     */
    public function removeIdarea(\Zips\Bundle\MainBundle\Entity\Areas $idarea)
    {
        $this->idarea->removeElement($idarea);
    }

    /**
     * Get idarea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Add idgrupo
     *
     * @param \Zips\Bundle\MainBundle\Entity\Grupos $idgrupo
     * @return Usuarios
     */
    public function addIdgrupo(\Zips\Bundle\MainBundle\Entity\Grupos $idgrupo)
    {
        $this->idgrupo[] = $idgrupo;

        return $this;
    }

    /**
     * Remove idgrupo
     *
     * @param \Zips\Bundle\MainBundle\Entity\Grupos $idgrupo
     */
    public function removeIdgrupo(\Zips\Bundle\MainBundle\Entity\Grupos $idgrupo)
    {
        $this->idgrupo->removeElement($idgrupo);
    }

    /**
     * Get idgrupo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }
}

<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupos
 *
 * @ORM\Table(name="Grupos", indexes={@ORM\Index(name="defaultArea", columns={"defaultArea"})})
 * @ORM\Entity
 */
class Grupos
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

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
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Areas", inversedBy="idgrupo")
     * @ORM\JoinTable(name="grupos_areas",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios", mappedBy="idgrupo")
     */
    private $idusuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idarea = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idusuario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nome
     *
     * @param string $nome
     * @return Grupos
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
     * Set defaultarea
     *
     * @param \Zips\Bundle\MainBundle\Entity\Areas $defaultarea
     * @return Grupos
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
     * @return Grupos
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
     * Add idusuario
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $idusuario
     * @return Grupos
     */
    public function addIdusuario(\Zips\Bundle\MainBundle\Entity\Usuarios $idusuario)
    {
        $this->idusuario[] = $idusuario;

        return $this;
    }

    /**
     * Remove idusuario
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $idusuario
     */
    public function removeIdusuario(\Zips\Bundle\MainBundle\Entity\Usuarios $idusuario)
    {
        $this->idusuario->removeElement($idusuario);
    }

    /**
     * Get idusuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}

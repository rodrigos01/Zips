<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areas
 *
 * @ORM\Table(name="Areas")
 * @ORM\Entity
 */
class Areas
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="home", type="string", length=50, nullable=true)
     */
    private $home;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Grupos", mappedBy="idarea")
     */
    private $idgrupo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios", mappedBy="idarea")
     */
    private $idusuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idgrupo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Areas
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
     * Set home
     *
     * @param string $home
     * @return Areas
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Add idgrupo
     *
     * @param \Zips\Bundle\MainBundle\Entity\Grupos $idgrupo
     * @return Areas
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

    /**
     * Add idusuario
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $idusuario
     * @return Areas
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

<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sites
 *
 * @ORM\Table(name="Sites")
 * @ORM\Entity
 */
class Sites
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Ambientes", inversedBy="idsite")
     * @ORM\JoinTable(name="sites_ambientes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idSite", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idAmbiente", referencedColumnName="id")
     *   }
     * )
     */
    private $idambiente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idambiente = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Sites
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
     * Add idambiente
     *
     * @param \Zips\Bundle\MainBundle\Entity\Ambientes $idambiente
     * @return Sites
     */
    public function addIdambiente(\Zips\Bundle\MainBundle\Entity\Ambientes $idambiente)
    {
        $this->idambiente[] = $idambiente;

        return $this;
    }

    /**
     * Remove idambiente
     *
     * @param \Zips\Bundle\MainBundle\Entity\Ambientes $idambiente
     */
    public function removeIdambiente(\Zips\Bundle\MainBundle\Entity\Ambientes $idambiente)
    {
        $this->idambiente->removeElement($idambiente);
    }

    /**
     * Get idambiente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdambiente()
    {
        return $this->idambiente;
    }
}

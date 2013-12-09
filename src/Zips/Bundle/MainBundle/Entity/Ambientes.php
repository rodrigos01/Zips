<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ambientes
 *
 * @ORM\Table(name="Ambientes")
 * @ORM\Entity
 */
class Ambientes
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
     * @ORM\ManyToMany(targetEntity="Zips\Bundle\MainBundle\Entity\Sites", mappedBy="idambiente")
     */
    private $idsite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idsite = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Ambientes
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
     * Add idsite
     *
     * @param \Zips\Bundle\MainBundle\Entity\Sites $idsite
     * @return Ambientes
     */
    public function addIdsite(\Zips\Bundle\MainBundle\Entity\Sites $idsite)
    {
        $this->idsite[] = $idsite;

        return $this;
    }

    /**
     * Remove idsite
     *
     * @param \Zips\Bundle\MainBundle\Entity\Sites $idsite
     */
    public function removeIdsite(\Zips\Bundle\MainBundle\Entity\Sites $idsite)
    {
        $this->idsite->removeElement($idsite);
    }

    /**
     * Get idsite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdsite()
    {
        return $this->idsite;
    }
}

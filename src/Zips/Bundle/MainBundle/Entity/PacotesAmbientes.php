<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PacotesAmbientes
 *
 * @ORM\Table(name="Pacotes_Ambientes", indexes={@ORM\Index(name="idAmbiente", columns={"idAmbiente"}), @ORM\Index(name="aprovadoPor", columns={"aprovadoPor"}), @ORM\Index(name="upadoPor", columns={"upadoPor"}), @ORM\Index(name="IDX_C13847CF6130A7D0", columns={"idPacote"})})
 * @ORM\Entity
 */
class PacotesAmbientes
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="aprovado", type="boolean", nullable=true)
     */
    private $aprovado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAprovado", type="datetime", nullable=false)
     */
    private $dataaprovado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upado", type="boolean", nullable=true)
     */
    private $upado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataUpado", type="datetime", nullable=false)
     */
    private $dataupado;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Pacotes
     *
     * @ORM\OneToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Pacotes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPacote", referencedColumnName="id", unique=true)
     * })
     */
    private $idpacote;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Ambientes
     *
     * @ORM\OneToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Ambientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAmbiente", referencedColumnName="id", unique=true)
     * })
     */
    private $idambiente;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aprovadoPor", referencedColumnName="id")
     * })
     */
    private $aprovadopor;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="upadoPor", referencedColumnName="id")
     * })
     */
    private $upadopor;



    /**
     * Set aprovado
     *
     * @param boolean $aprovado
     * @return PacotesAmbientes
     */
    public function setAprovado($aprovado)
    {
        $this->aprovado = $aprovado;

        return $this;
    }

    /**
     * Get aprovado
     *
     * @return boolean 
     */
    public function getAprovado()
    {
        return $this->aprovado;
    }

    /**
     * Set dataaprovado
     *
     * @param \DateTime $dataaprovado
     * @return PacotesAmbientes
     */
    public function setDataaprovado($dataaprovado)
    {
        $this->dataaprovado = $dataaprovado;

        return $this;
    }

    /**
     * Get dataaprovado
     *
     * @return \DateTime 
     */
    public function getDataaprovado()
    {
        return $this->dataaprovado;
    }

    /**
     * Set upado
     *
     * @param boolean $upado
     * @return PacotesAmbientes
     */
    public function setUpado($upado)
    {
        $this->upado = $upado;

        return $this;
    }

    /**
     * Get upado
     *
     * @return boolean 
     */
    public function getUpado()
    {
        return $this->upado;
    }

    /**
     * Set dataupado
     *
     * @param \DateTime $dataupado
     * @return PacotesAmbientes
     */
    public function setDataupado($dataupado)
    {
        $this->dataupado = $dataupado;

        return $this;
    }

    /**
     * Get dataupado
     *
     * @return \DateTime 
     */
    public function getDataupado()
    {
        return $this->dataupado;
    }

    /**
     * Set idpacote
     *
     * @param \Zips\Bundle\MainBundle\Entity\Pacotes $idpacote
     * @return PacotesAmbientes
     */
    public function setIdpacote(\Zips\Bundle\MainBundle\Entity\Pacotes $idpacote = null)
    {
        $this->idpacote = $idpacote;

        return $this;
    }

    /**
     * Get idpacote
     *
     * @return \Zips\Bundle\MainBundle\Entity\Pacotes 
     */
    public function getIdpacote()
    {
        return $this->idpacote;
    }

    /**
     * Set idambiente
     *
     * @param \Zips\Bundle\MainBundle\Entity\Ambientes $idambiente
     * @return PacotesAmbientes
     */
    public function setIdambiente(\Zips\Bundle\MainBundle\Entity\Ambientes $idambiente = null)
    {
        $this->idambiente = $idambiente;

        return $this;
    }

    /**
     * Get idambiente
     *
     * @return \Zips\Bundle\MainBundle\Entity\Ambientes 
     */
    public function getIdambiente()
    {
        return $this->idambiente;
    }

    /**
     * Set aprovadopor
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $aprovadopor
     * @return PacotesAmbientes
     */
    public function setAprovadopor(\Zips\Bundle\MainBundle\Entity\Usuarios $aprovadopor = null)
    {
        $this->aprovadopor = $aprovadopor;

        return $this;
    }

    /**
     * Get aprovadopor
     *
     * @return \Zips\Bundle\MainBundle\Entity\Usuarios 
     */
    public function getAprovadopor()
    {
        return $this->aprovadopor;
    }

    /**
     * Set upadopor
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $upadopor
     * @return PacotesAmbientes
     */
    public function setUpadopor(\Zips\Bundle\MainBundle\Entity\Usuarios $upadopor = null)
    {
        $this->upadopor = $upadopor;

        return $this;
    }

    /**
     * Get upadopor
     *
     * @return \Zips\Bundle\MainBundle\Entity\Usuarios 
     */
    public function getUpadopor()
    {
        return $this->upadopor;
    }
}

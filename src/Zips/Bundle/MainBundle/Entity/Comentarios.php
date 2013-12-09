<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table(name="Comentarios", indexes={@ORM\Index(name="idPacote", columns={"idPacote"}), @ORM\Index(name="idUsuario", columns={"idUsuario"})})
 * @ORM\Entity
 */
class Comentarios
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
     * @ORM\Column(name="texto", type="text", nullable=true)
     */
    private $texto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataPostado", type="datetime", nullable=false)
     */
    private $datapostado;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Pacotes
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Pacotes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPacote", referencedColumnName="id")
     * })
     */
    private $idpacote;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
     * })
     */
    private $idusuario;



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
     * Set texto
     *
     * @param string $texto
     * @return Comentarios
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set datapostado
     *
     * @param \DateTime $datapostado
     * @return Comentarios
     */
    public function setDatapostado($datapostado)
    {
        $this->datapostado = $datapostado;

        return $this;
    }

    /**
     * Get datapostado
     *
     * @return \DateTime 
     */
    public function getDatapostado()
    {
        return $this->datapostado;
    }

    /**
     * Set idpacote
     *
     * @param \Zips\Bundle\MainBundle\Entity\Pacotes $idpacote
     * @return Comentarios
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
     * Set idusuario
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $idusuario
     * @return Comentarios
     */
    public function setIdusuario(\Zips\Bundle\MainBundle\Entity\Usuarios $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \Zips\Bundle\MainBundle\Entity\Usuarios 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}

<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Revisoes
 *
 * @ORM\Table(name="Revisoes", indexes={@ORM\Index(name="postadoPor", columns={"postadoPor"}), @ORM\Index(name="IDX_9718F7B6130A7D0", columns={"idPacote"})})
 * @ORM\Entity
 */
class Revisoes
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataPostado", type="datetime")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datapostado;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

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
     * @var \Zips\Bundle\MainBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="postadoPor", referencedColumnName="id")
     * })
     */
    private $postadopor;



    /**
     * Set datapostado
     *
     * @param \DateTime $datapostado
     * @return Revisoes
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
     * Set filename
     *
     * @param string $filename
     * @return Revisoes
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Revisoes
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set idpacote
     *
     * @param \Zips\Bundle\MainBundle\Entity\Pacotes $idpacote
     * @return Revisoes
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
     * Set postadopor
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $postadopor
     * @return Revisoes
     */
    public function setPostadopor(\Zips\Bundle\MainBundle\Entity\Usuarios $postadopor = null)
    {
        $this->postadopor = $postadopor;

        return $this;
    }

    /**
     * Get postadopor
     *
     * @return \Zips\Bundle\MainBundle\Entity\Usuarios 
     */
    public function getPostadopor()
    {
        return $this->postadopor;
    }
}

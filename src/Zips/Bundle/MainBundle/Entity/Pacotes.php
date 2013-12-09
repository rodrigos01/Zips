<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pacotes
 *
 * @ORM\Table(name="Pacotes", indexes={@ORM\Index(name="criadoPor", columns={"criadoPor"}), @ORM\Index(name="idSite", columns={"idSite"})})
 * @ORM\Entity
 */
class Pacotes
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
     * @var integer
     *
     * @ORM\Column(name="idProjeto", type="integer", nullable=true)
     */
    private $idprojeto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTarefa", type="integer", nullable=true)
     */
    private $idtarefa;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCriacao", type="datetime", nullable=true)
     */
    private $datacriacao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="revisaoSolicitada", type="boolean", nullable=true)
     */
    private $revisaosolicitada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="finalizado", type="boolean", nullable=true)
     */
    private $finalizado;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="criadoPor", referencedColumnName="id")
     * })
     */
    private $criadopor;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Sites
     *
     * @ORM\ManyToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSite", referencedColumnName="id")
     * })
     */
    private $idsite;



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
     * Set idprojeto
     *
     * @param integer $idprojeto
     * @return Pacotes
     */
    public function setIdprojeto($idprojeto)
    {
        $this->idprojeto = $idprojeto;

        return $this;
    }

    /**
     * Get idprojeto
     *
     * @return integer 
     */
    public function getIdprojeto()
    {
        return $this->idprojeto;
    }

    /**
     * Set idtarefa
     *
     * @param integer $idtarefa
     * @return Pacotes
     */
    public function setIdtarefa($idtarefa)
    {
        $this->idtarefa = $idtarefa;

        return $this;
    }

    /**
     * Get idtarefa
     *
     * @return integer 
     */
    public function getIdtarefa()
    {
        return $this->idtarefa;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Pacotes
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
     * Set datacriacao
     *
     * @param \DateTime $datacriacao
     * @return Pacotes
     */
    public function setDatacriacao($datacriacao)
    {
        $this->datacriacao = $datacriacao;

        return $this;
    }

    /**
     * Get datacriacao
     *
     * @return \DateTime 
     */
    public function getDatacriacao()
    {
        return $this->datacriacao;
    }

    /**
     * Set revisaosolicitada
     *
     * @param boolean $revisaosolicitada
     * @return Pacotes
     */
    public function setRevisaosolicitada($revisaosolicitada)
    {
        $this->revisaosolicitada = $revisaosolicitada;

        return $this;
    }

    /**
     * Get revisaosolicitada
     *
     * @return boolean 
     */
    public function getRevisaosolicitada()
    {
        return $this->revisaosolicitada;
    }

    /**
     * Set finalizado
     *
     * @param boolean $finalizado
     * @return Pacotes
     */
    public function setFinalizado($finalizado)
    {
        $this->finalizado = $finalizado;

        return $this;
    }

    /**
     * Get finalizado
     *
     * @return boolean 
     */
    public function getFinalizado()
    {
        return $this->finalizado;
    }

    /**
     * Set criadopor
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $criadopor
     * @return Pacotes
     */
    public function setCriadopor(\Zips\Bundle\MainBundle\Entity\Usuarios $criadopor = null)
    {
        $this->criadopor = $criadopor;

        return $this;
    }

    /**
     * Get criadopor
     *
     * @return \Zips\Bundle\MainBundle\Entity\Usuarios 
     */
    public function getCriadopor()
    {
        return $this->criadopor;
    }

    /**
     * Set idsite
     *
     * @param \Zips\Bundle\MainBundle\Entity\Sites $idsite
     * @return Pacotes
     */
    public function setIdsite(\Zips\Bundle\MainBundle\Entity\Sites $idsite = null)
    {
        $this->idsite = $idsite;

        return $this;
    }

    /**
     * Get idsite
     *
     * @return \Zips\Bundle\MainBundle\Entity\Sites 
     */
    public function getIdsite()
    {
        return $this->idsite;
    }
}

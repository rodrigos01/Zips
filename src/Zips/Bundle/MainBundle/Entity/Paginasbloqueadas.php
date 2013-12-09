<?php

namespace Zips\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paginasbloqueadas
 *
 * @ORM\Table(name="PaginasBloqueadas", indexes={@ORM\Index(name="idUsuario", columns={"idUsuario"})})
 * @ORM\Entity
 */
class Paginasbloqueadas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nome;

    /**
     * @var \Zips\Bundle\MainBundle\Entity\Usuarios
     *
     * @ORM\OneToOne(targetEntity="Zips\Bundle\MainBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="id", unique=true)
     * })
     */
    private $idusuario;



    /**
     * Set nome
     *
     * @param string $nome
     * @return Paginasbloqueadas
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
     * Set idusuario
     *
     * @param \Zips\Bundle\MainBundle\Entity\Usuarios $idusuario
     * @return Paginasbloqueadas
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

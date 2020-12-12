<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logement
 *
 * @ORM\Table(name="logement", indexes={@ORM\Index(name="logement_fk", columns={"id_cite"})})
 * @ORM\Entity
 */
class Logement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=500, nullable=true)
     */
    private $url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isapproved", type="boolean", nullable=true)
     */
    private $isapproved = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isdisponible", type="boolean", nullable=false)
     */
    private $isdisponible = '1';

    /**
     * @var \Cite
     *
     * @ORM\ManyToOne(targetEntity="Cite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cite", referencedColumnName="id_cite")
     * })
     */
    private $idCite;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return bool
     */
    public function isIsapproved()
    {
        return $this->isapproved;
    }

    /**
     * @param bool $isapproved
     */
    public function setIsapproved($isapproved)
    {
        $this->isapproved = $isapproved;
    }

    /**
     * @return bool
     */
    public function isIsdisponible()
    {
        return $this->isdisponible;
    }

    /**
     * @param bool $isdisponible
     */
    public function setIsdisponible($isdisponible)
    {
        $this->isdisponible = $isdisponible;
    }

    /**
     * @return \Cite
     */
    public function getIdCite()
    {
        return $this->idCite;
    }

    /**
     * @param \Cite $idCite
     */
    public function setIdCite($idCite)
    {
        $this->idCite = $idCite;
    }




    /**
     * Get isapproved
     *
     * @return boolean
     */
    public function getIsapproved()
    {
        return $this->isapproved;
    }

    /**
     * Get isdisponible
     *
     * @return boolean
     */
    public function getIsdisponible()
    {
        return $this->isdisponible;
    }
}

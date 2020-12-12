<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cite
 *
 * @ORM\Table(name="cite")
 * @ORM\Entity
 */
class Cite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cite", type="string", length=100, nullable=false)
     */
    private $nomCite;

    /**
     * @return int
     */
    public function getIdCite()
    {
        return $this->idCite;
    }

    /**
     * @param int $idCite
     */
    public function setIdCite($idCite)
    {
        $this->idCite = $idCite;
    }

    /**
     * @return string
     */
    public function getNomCite()
    {
        return $this->nomCite;
    }

    /**
     * @param string $nomCite
     */
    public function setNomCite($nomCite)
    {
        $this->nomCite = $nomCite;
    }



}

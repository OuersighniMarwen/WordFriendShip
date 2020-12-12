<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogementDetails
 *
 * @ORM\Table(name="logement_details")
 * @ORM\Entity
 */
class LogementDetails
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
     * @var integer
     *
     * @ORM\Column(name="id_Logement", type="integer", nullable=true)
     */
    private $idLogement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Climatisation", type="boolean", nullable=false)
     */
    private $climatisation = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Parking", type="boolean", nullable=false)
     */
    private $parking = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Internet", type="boolean", nullable=false)
     */
    private $internet = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Animaux", type="boolean", nullable=false)
     */
    private $animaux = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Restauration", type="boolean", nullable=false)
     */
    private $restauration = '0';

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
     * @return int
     */
    public function getIdLogement()
    {
        return $this->idLogement;
    }

    /**
     * @param int $idLogement
     */
    public function setIdLogement($idLogement)
    {
        $this->idLogement = $idLogement;
    }

    /**
     * @return bool
     */
    public function isClimatisation()
    {
        return $this->climatisation;
    }

    /**
     * @param bool $climatisation
     */
    public function setClimatisation($climatisation)
    {
        $this->climatisation = $climatisation;
    }

    /**
     * @return bool
     */
    public function isParking()
    {
        return $this->parking;
    }

    /**
     * @param bool $parking
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
    }

    /**
     * @return bool
     */
    public function isInternet()
    {
        return $this->internet;
    }

    /**
     * @param bool $internet
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
    }

    /**
     * @return bool
     */
    public function isAnimaux()
    {
        return $this->animaux;
    }

    /**
     * @param bool $animaux
     */
    public function setAnimaux($animaux)
    {
        $this->animaux = $animaux;
    }

    /**
     * @return bool
     */
    public function isRestauration()
    {
        return $this->restauration;
    }

    /**
     * @param bool $restauration
     */
    public function setRestauration($restauration)
    {
        $this->restauration = $restauration;
    }




    /**
     * Get climatisation
     *
     * @return boolean
     */
    public function getClimatisation()
    {
        return $this->climatisation;
    }

    /**
     * Get parking
     *
     * @return boolean
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Get internet
     *
     * @return boolean
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * Get animaux
     *
     * @return boolean
     */
    public function getAnimaux()
    {
        return $this->animaux;
    }

    /**
     * Get restauration
     *
     * @return boolean
     */
    public function getRestauration()
    {
        return $this->restauration;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationLogement
 *
 * @ORM\Table(name="reservation_logement")
 * @ORM\Entity
 */
class ReservationLogement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_logement", type="integer", nullable=false)
     */
    private $idLogement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrive", type="date", nullable=false)
     */
    private $dateArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param int $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
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
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * @param \DateTime $dateArrive
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;
    }

    /**
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * @param \DateTime $dateDepart
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    }



}

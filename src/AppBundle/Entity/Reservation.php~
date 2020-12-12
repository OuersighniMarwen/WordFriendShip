<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_event", columns={"Id_event"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_event", type="integer", nullable=false)
     */
    private $idEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_place", type="integer", nullable=false)
     */
    private $nbrPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="frais", type="integer", nullable=false)
     */
    private $frais;

    /**
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @param int $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;
    }

    /**
     * @return int
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param int $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
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
    public function getNbrPlace()
    {
        return $this->nbrPlace;
    }

    /**
     * @param int $nbrPlace
     */
    public function setNbrPlace($nbrPlace)
    {
        $this->nbrPlace = $nbrPlace;
    }

    /**
     * @return int
     */
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * @param int $frais
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;
    }



}

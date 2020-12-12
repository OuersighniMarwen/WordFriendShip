<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TravelBuddy
 *
 * @ORM\Table(name="travel_buddy", indexes={@ORM\Index(name="fk_id_user3", columns={"id_user"})})
 * @ORM\Entity
 */
class TravelBuddy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_travel_buddy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTravelBuddy;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=50, nullable=false)
     */
    private $destination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=200, nullable=true)
     */
    private $picture;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TravelGroup", mappedBy="idTravelBuddy")
     */
    private $idTravelGroup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTravelGroup = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdTravelBuddy()
    {
        return $this->idTravelBuddy;
    }

    /**
     * @param int $idTravelBuddy
     */
    public function setIdTravelBuddy($idTravelBuddy)
    {
        $this->idTravelBuddy = $idTravelBuddy;
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
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return \User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param \User $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTravelGroup()
    {
        return $this->idTravelGroup;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idTravelGroup
     */
    public function setIdTravelGroup($idTravelGroup)
    {
        $this->idTravelGroup = $idTravelGroup;
    }



    /**
     * Add idTravelGroup
     *
     * @param \AppBundle\Entity\TravelGroup $idTravelGroup
     *
     * @return TravelBuddy
     */
    public function addIdTravelGroup(\AppBundle\Entity\TravelGroup $idTravelGroup)
    {
        $this->idTravelGroup[] = $idTravelGroup;

        return $this;
    }

    /**
     * Remove idTravelGroup
     *
     * @param \AppBundle\Entity\TravelGroup $idTravelGroup
     */
    public function removeIdTravelGroup(\AppBundle\Entity\TravelGroup $idTravelGroup)
    {
        $this->idTravelGroup->removeElement($idTravelGroup);
    }
}

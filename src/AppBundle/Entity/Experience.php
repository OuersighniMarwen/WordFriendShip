<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience", indexes={@ORM\Index(name="fk_id_pays", columns={"id_pays"}), @ORM\Index(name="fk_id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Experience
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_experience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_exp", type="string", length=30, nullable=false)
     */
    private $titreExp;

    /**
     * @var string
     *
     * @ORM\Column(name="type_exp", type="string", length=30, nullable=false)
     */
    private $typeExp;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_exp", type="text", length=65535, nullable=false)
     */
    private $descExp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_exp", type="date", nullable=false)
     */
    private $dateExp;

    /**
     * @var string
     *
     * @ORM\Column(name="eval_exp", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $evalExp;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=400, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id")
     * })
     */
    private $idPays;

    /**
     * @return int
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }

    /**
     * @param int $idExperience
     */
    public function setIdExperience($idExperience)
    {
        $this->idExperience = $idExperience;
    }

    /**
     * @return string
     */
    public function getTitreExp()
    {
        return $this->titreExp;
    }

    /**
     * @param string $titreExp
     */
    public function setTitreExp($titreExp)
    {
        $this->titreExp = $titreExp;
    }

    /**
     * @return string
     */
    public function getTypeExp()
    {
        return $this->typeExp;
    }

    /**
     * @param string $typeExp
     */
    public function setTypeExp($typeExp)
    {
        $this->typeExp = $typeExp;
    }

    /**
     * @return string
     */
    public function getDescExp()
    {
        return $this->descExp;
    }

    /**
     * @param string $descExp
     */
    public function setDescExp($descExp)
    {
        $this->descExp = $descExp;
    }

    /**
     * @return \DateTime
     */
    public function getDateExp()
    {
        return $this->dateExp;
    }

    /**
     * @param \DateTime $dateExp
     */
    public function setDateExp($dateExp)
    {
        $this->dateExp = $dateExp;
    }

    /**
     * @return string
     */
    public function getEvalExp()
    {
        return $this->evalExp;
    }

    /**
     * @param string $evalExp
     */
    public function setEvalExp($evalExp)
    {
        $this->evalExp = $evalExp;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     * @return \User
     */
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * @param \User $idPays
     */
    public function setIdPays($idPays)
    {
        $this->idPays = $idPays;
    }



}

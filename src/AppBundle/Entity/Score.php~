<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity
 */
class Score
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_score", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idScore;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     */
    private $idUtilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_blog_ecrit", type="integer", nullable=false)
     */
    private $nbrBlogEcrit;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_reponse_valider", type="integer", nullable=false)
     */
    private $nbrReponseValider;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_final", type="integer", nullable=false)
     */
    private $scoreFinal;

    /**
     * @return int
     */
    public function getIdScore()
    {
        return $this->idScore;
    }

    /**
     * @param int $idScore
     */
    public function setIdScore($idScore)
    {
        $this->idScore = $idScore;
    }

    /**
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param int $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return int
     */
    public function getNbrBlogEcrit()
    {
        return $this->nbrBlogEcrit;
    }

    /**
     * @param int $nbrBlogEcrit
     */
    public function setNbrBlogEcrit($nbrBlogEcrit)
    {
        $this->nbrBlogEcrit = $nbrBlogEcrit;
    }

    /**
     * @return int
     */
    public function getNbrReponseValider()
    {
        return $this->nbrReponseValider;
    }

    /**
     * @param int $nbrReponseValider
     */
    public function setNbrReponseValider($nbrReponseValider)
    {
        $this->nbrReponseValider = $nbrReponseValider;
    }

    /**
     * @return int
     */
    public function getScoreFinal()
    {
        return $this->scoreFinal;
    }

    /**
     * @param int $scoreFinal
     */
    public function setScoreFinal($scoreFinal)
    {
        $this->scoreFinal = $scoreFinal;
    }



}

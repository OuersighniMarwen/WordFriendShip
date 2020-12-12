<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommExp
 *
 * @ORM\Table(name="comm_exp")
 * @ORM\Entity
 */
class CommExp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comm_exp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommExp;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_exp", type="integer", nullable=false)
     */
    private $idExp;

    /**
     * @return int
     */
    public function getIdCommExp()
    {
        return $this->idCommExp;
    }

    /**
     * @param int $idCommExp
     */
    public function setIdCommExp($idCommExp)
    {
        $this->idCommExp = $idCommExp;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return int
     */
    public function getIdExp()
    {
        return $this->idExp;
    }

    /**
     * @param int $idExp
     */
    public function setIdExp($idExp)
    {
        $this->idExp = $idExp;
    }



}

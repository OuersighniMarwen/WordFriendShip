<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeExp
 *
 * @ORM\Table(name="type_exp")
 * @ORM\Entity
 */
class TypeExp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_exp", type="integer", nullable=false)
     */
    private $idExp;

    /**
     * @return int
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param int $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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

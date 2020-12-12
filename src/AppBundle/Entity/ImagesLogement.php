<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagesLogement
 *
 * @ORM\Table(name="images_logement")
 * @ORM\Entity
 */
class ImagesLogement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImage;

    /**
     * @var string
     *
     * @ORM\Column(name="url_image", type="string", length=255, nullable=false)
     */
    private $urlImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_logement", type="integer", nullable=true)
     */
    private $idLogement;

    /**
     * @return int
     */
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * @param int $idImage
     */
    public function setIdImage($idImage)
    {
        $this->idImage = $idImage;
    }

    /**
     * @return string
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * @param string $urlImage
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;
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



}

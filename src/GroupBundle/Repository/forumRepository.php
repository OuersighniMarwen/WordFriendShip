<?php

namespace GroupBundle\Repository;
use \Doctrine\ORM\EntityRepository;
/**
 * forumRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 *
 */
class forumRepository extends EntityRepository
{
    public function findCategorieParameter($id){
        $query = $this->getEntityManager()
            ->createQuery("
                    select questions from AppBundle:questions questions WHERE questions.categorie=:id
            ")
            ->setParameter('id',$id);
        return $query->getResult();
    }

    public function findforumParameter($id){
        $query = $this->getEntityManager()
            ->createQuery("
              select Questions from AppBundle:Questions Questions WHERE Questions.idQuestion=:id
            ")
            ->setParameter('id',$id);
        return $query->getResult();
    }


}

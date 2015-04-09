<?php

namespace PM\GameBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GameRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GameRepository extends EntityRepository
{
    public function findMyGamesByCharacter($user)
    {
      $query = $this->_em->createQuery('SELECT g FROM PMGameBundle:Game g JOIN g.characters c WHERE c.user = :user');
      $query->setParameter('user', $user);
      $results = $query->getResult();

      return $results;
    }
    
    public function findMyGamesByGameMaster($user)
    {
      $query = $this->_em->createQuery('SELECT g FROM PMGameBundle:Game g JOIN g.gameMasters u WHERE u = :user');
      $query->setParameter('user', $user);
      $results = $query->getResult();

      return $results;
    }
}

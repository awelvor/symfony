<?php

namespace App\Repository;

use App\Entity\Euros;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\DBAL\Connection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @extends ServiceEntityRepository<Euros>
 *
 * @method Euros|null find($id, $lockMode = null, $lockVersion = null)
 * @method Euros|null findOneBy(array $criteria, array $orderBy = null)
 * @method Euros[]    findAll()
 * @method Euros[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EurosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Euros::class);
    }

    public function save(Euros $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function budget(EntityManagerInterface $em, Request $request)
    {
    	$mois = array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre',);
    	$lebudget = ($request->query->get('mois')>0) ? $request->query->get('mois') : $mois[date('n')-1].date('Y');
    	$dql = "select p from App\Entity\Euros p  where p.budget='$lebudget' order by p.date asc";
	return $em->createQuery($dql)->getResult();
	}
    
   public function mensuel(EntityManagerInterface $em, Request $request)
    {
    	$mois = array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre',);
    $annee = ($request->query->get('annee')>0) ? $request->query->get('annee') : date('Y');
    	$tab=[];
    foreach ($mois as $el) {
    $dql = "select sum(p.credit) as scredit, sum(p.debit) as sdebit, '$el$annee' as mois from App\Entity\Euros p   where p.budget='$el$annee'";
   array_push($tab,$em->createQuery($dql)->getResult());
    }
    return $tab;
    }
    
    public function comptes_global(EntityManagerInterface $em, Request $request)
    {
    	$compte = array('ccsg','cvi nicole', 'cvi philippe','cc boursorama','cb boursorama','amazon','fnac');
    	$tab1=[];
    	if ($request->query->get('id')>0){
		$dql = "UPDATE App\Entity\Euros p SET p.banque = date_sub(current_date(),1,'day') WHERE p.id=".$request->query->get('id');
		$em->createQuery($dql)->getResult();
    	}
   foreach ($compte as $el) {
   	$dql = "select sum(p.credit - p.debit) as ss from App\Entity\Euros p  where (p.compte='$el') and (p.banque is not null)";
   	array_push($tab1,['aa'=>$em->createQuery($dql)->getResult(),'bb'=>$el]);
	}
	return $tab1;
}
	
    public function comptes_detail_notnull(EntityManagerInterface $em, Request $request)
    {
    	
    	$le_compte = $request->query->get('compte');
     $dql="select p from App\Entity\Euros p  where (p.compte='$le_compte') and (p.banque is not null) and (p.banque>date_sub(current_date(),30,'day'))  order by p.banque asc";
	$tab2 = $em->createQuery($dql)->getResult();	
	return $tab2;
    }
    
    public function comptes_detail_null(EntityManagerInterface $em, Request $request)
    {
    	
    	$le_compte = $request->query->get('compte');
	$dql="select p from App\Entity\Euros p  where (p.compte='$le_compte') and (p.banque is null) and (p.date<=current_date())  order by p.date asc";
	$tab2 = $em->createQuery($dql)->getResult();	
	return $tab2;
    }
    
    public function annuel(EntityManagerInterface $em)
    {
    	$tab=[];
    	for ($annee=2010; $annee<2025; $annee++){
    	$dql = "select sum (p.credit) as scredit, sum (p.debit) as sdebit, '$annee' as annee from App\Entity\Euros p  where p.budget like '%$annee'";
    	array_push($tab,$em->createQuery($dql)->getResult());
    	}
    	return $tab;
    }
    
    
    
    
    public function compte(EntityManagerInterface $em, string $lecompte)
    {
	$listeProduits= $em->createQuery("select p from App\Entity\Euros p  where p.compte='".$lecompte."' order by p.date asc")->getResult();
	
	return $listeProduits;
    }
    
    

//    /**
//     * @return Euros[] Returns an array of Euros objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Euros
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

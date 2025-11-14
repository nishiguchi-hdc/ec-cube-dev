<?php

namespace Plugin\B2BConnector\Repository;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry; // ← これを使う
use Eccube\Common\EccubeConfig;
use Eccube\Doctrine\Query\Queries;
use Eccube\Entity\Customer as CustomerEntity;
use Eccube\Repository\CustomerRepository;
use Eccube\Repository\OrderRepository;
use Plugin\B2BConnector\Entity\CustomerExt;

class CustomerRepositoryDecorator extends CustomerRepository

{
    private CustomerRepository $inner;

    public function __construct(
        CustomerRepository $inner,
        ManagerRegistry $registry,
        Queries $queries,
        EntityManagerInterface $entityManager,
        OrderRepository $orderRepository,
        EccubeConfig $eccubeConfig
    ) {
        // ★ これが必須（エンティティクラスを渡して親を初期化）
        parent::__construct($registry, $queries, $entityManager, $orderRepository, $eccubeConfig);
        $this->inner = $inner;
    }

    public function getQueryBuilderBySearchData($searchData)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->inner->getQueryBuilderBySearchData($searchData);

        // Traitが反映済みなら関連JOIN、未反映ならWITH句JOIN
        $meta = $this->getEntityManager()->getClassMetadata(CustomerEntity::class);
        if ($meta->hasAssociation('customerExt')) {
            $dql = (string) $qb->getDQL();
            if (strpos($dql, 'c.customerExt') === false) {
                $qb->leftJoin('c.customerExt', 'ce')->addSelect('ce');
            }
        } else {
            // フォールバック（関連名なしJOIN）
            $qb->leftJoin(CustomerExt::class, 'ce', 'WITH', 'ce.Customer = c')
               ->addSelect('ce');
        }

        // ===== ここから「担当者・会社名」を freeword に追加 =====
        // 管理画面の単一入力はだいたい 'multi'（環境で違う場合は実際のキーに合わせて）
        $word = $searchData['multi'] ?? null;
        if (is_string($word) && $word !== '') {
            $like = '%' . str_replace(['%', '_'], ['\%', '\_'], trim($word)) . '%';

            // 既存の OR 条件に「担当者・会社名」を足す
            $or = $qb->expr()->orX(
                $qb->expr()->like('ce.pic_name01', ':kw'),
                $qb->expr()->like('ce.pic_name02', ':kw'),
                $qb->expr()->like('c.company_name', ':kw')
            );

            // すでにWHEREがある場合はORで括って追加
            $qb->orWhere($or)->setParameter('kw', $like);
        }

        return $qb;
    }

}

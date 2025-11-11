<?php

namespace Plugin\B2BConnector\Event;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\Customer;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Plugin\B2BConnector\Entity\CustomerExt;
use Plugin\B2BConnector\Form\Type\Admin\CustomerExtType;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;


class AdminCustomerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private FormFactoryInterface $formFactory,
        private EntityManagerInterface $em,
        private LoggerInterface $logger,
    ) {}

    public static function getSubscribedEvents(): array
    {
        // EC-CUBE 4.3 の管理画面：顧客編集（一覧→編集の画面）
        return [];
    }

}

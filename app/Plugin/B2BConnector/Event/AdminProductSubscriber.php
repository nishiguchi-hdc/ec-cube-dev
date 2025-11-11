<?php

namespace Plugin\B2BConnector\Event;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Plugin\B2BConnector\Entity\ProductClassExt;
use Plugin\B2BConnector\Entity\ProductExt;
use Plugin\B2BConnector\Form\Type\Admin\ProductClassExtType;
use Plugin\B2BConnector\Form\Type\Admin\ProductExtType;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Twig\Environment;

class AdminProductSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Environment $twig,
        private EntityManagerInterface $em,
        private FormFactoryInterface $formFactory,
        private LoggerInterface $logger
    ) {}

    public static function getSubscribedEvents()
    {
        return [];
    }

}

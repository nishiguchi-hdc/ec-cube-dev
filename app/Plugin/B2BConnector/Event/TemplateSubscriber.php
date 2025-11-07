<?php
namespace Plugin\B2BConnector\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class TemplateSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [];
    }
}

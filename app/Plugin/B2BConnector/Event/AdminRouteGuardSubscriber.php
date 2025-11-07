<?php

namespace Plugin\B2BConnector\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminRouteGuardSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'kernel.request' => ['onKernelRequest', 8],
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $route = $request->attributes->get('_route');

        if ($route === 'admin_product_product_class') {
            throw new NotFoundHttpException('BtoBモードでは規格編集画面は無効です。');
        }
    }
}

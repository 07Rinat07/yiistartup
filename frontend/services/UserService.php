<?php

namespace frontend\services;

use frontend\services\SubscribeService;

class UserService
{
    private SubscribeService $subscribeService;

    public function __construct(SubscribeService $subscribeService)
    {
        $this->subscribeService = $subscribeService;
    }

    public function run($userId)
    {
        return $this->subscribeService->getSubscribe($userId);
    }
}





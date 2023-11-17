<?php

namespace frontend\services;

use common\models\User;

class SubscribeService
{
    public function getSubscribe($userId)
    {
        return User::findOne(['id' => $userId, 'status' => User::STATUS_ACTIVE]);
    }
}





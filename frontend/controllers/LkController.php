<?php

namespace frontend\controllers;

use frontend\services\UserService;
use yii\web\Controller;

/**
 * Site controller
 */
class LkController extends Controller
{
    /**
     * lk
     *
     * @return mixed
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->identity) {
            $user = \Yii::$container->get(UserService::class)->run(\Yii::$app->user->identity->id);
            if ($user) {
                echo 'Вы подписаны';
            } else {
                echo 'Вы не подписаны';
            }
        }else {
            echo 'Вы не подписаны';
        }

        return true;
        // return $this->render('index');
    }
}





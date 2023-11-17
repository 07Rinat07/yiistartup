<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\services\UserService;
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





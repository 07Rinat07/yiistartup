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
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }
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
                $status = 'Вы подписаны';
            } else {
                $status = 'Вы не подписаны';
            }
        } else {
            $status = 'Вы не подписаны';
        }

        return $this->render('index', [
            'points' => \Yii::$app->point->points(),
            'status' => $status
        ]);
    }

}

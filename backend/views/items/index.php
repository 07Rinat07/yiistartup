<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Items;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'user_id',
            'phone',
            //'subject',
            //'body:ntext',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($data){
                    return Html::img('/uploads/' . $data['image'], ['width' => '80px']);
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>



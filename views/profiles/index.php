<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfilesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'База суррогатных матерей AZBUKA LIFE';
?>

<div class="profiles-index">

    <h1><a href="/"><?= Html::encode($this->title) ?></a></h1>


    <?= $this->render('_search', ['model' => $searchModel]);

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => function ($model) {
                    return "<strong>" . str_pad($model->id, 4, '0', STR_PAD_LEFT) . "</strong>";
                }
            ],

            [
                'attribute' => 'status_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->status->name_status;
                },
                'contentOptions' => ['style' => 'min-width: 200px; max-width: 200px; '], // <-- right here
                'filter' =>
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Status::find()
                            ->select('id, name_status')
                            ->all(),
                        'id',
                        'name_status'
                    ),
            ],

            [

                'attribute' => 'birthday',
                'format' => 'raw',
                'filter' => false,
                'value' => function ($model) {
                    $from = new DateTime($model->birthday);
                    $to = new DateTime('today');
                    return $from->diff($to)->y . " лет";
                }
            ],
            [
                'attribute' => 'height',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->height ? $model->height . " см" : "";
                }
            ],

            [
                'attribute' => 'weight',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->weight ? $model->weight . " кг" : "";
                }
            ],


            [
                'attribute' => 'nationality_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->nationality->name_nationality;
                },
                //'contentOptions' => ['style' => 'min-width: 150px; max-width: 200px; '], // <-- right here
                'filter' =>
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Nationality::find()
                            ->select('id, name_nationality')
                            ->all(),
                        'id',
                        'name_nationality'
                    ),
            ],
            [
                'attribute' => 'education_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->education->name_education;
                },
                //'contentOptions' => ['style' => 'min-width: 150px; max-width: 200px; '], // <-- right here
                'filter' =>
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Education::find()
                            ->select('id, name_education')
                            ->all(),
                        'id',
                        'name_education'
                    ),
            ],

            [
                'attribute' => 'profession_id',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->profession->name_profession;
                },
                //'contentOptions' => ['style' => 'min-width: 150px; max-width: 200px; '], // <-- right here
                'filter' =>
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Profession::find()
                            ->select('id, name_profession')
                            ->all(),
                        'id',
                        'name_profession'
                    ),
            ],


            [
                'attribute' => 'bloodtype',
                'format' => 'raw',
                'value' => function ($model) {
                    return Yii::$app->params['bloodtype'][$model->bloodtype];
                },
                'filter' => Yii::$app->params['bloodtype']
            ],

            [
                'attribute' => 'experience',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->experience ? "есть" : "нет";
                },
                'contentOptions' => ['style' => 'min-width: 120px; max-width: 120px; '], // <-- right here
                'filter' => [
                    "0" => "нет",
                    "1" => "есть",
                ]

            ],


        ],
    ]); ?>


</div>

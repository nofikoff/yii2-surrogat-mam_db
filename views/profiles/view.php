<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profiles */

$this->title = str_pad($model->id, 4, '0', STR_PAD_LEFT) . " - " .$model->name_hiden;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profiles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => function ($model) {
                    return "<strong>" . str_pad($model->id, 4, '0', STR_PAD_LEFT) . "</strong>";
                }
            ],
            'name_hiden',
            'comment_hidden',
            'experience',
            'weight',
            'height',
            'birthday',
//            'bloodtype',
//            'status_id',
//            'education_id',
//            'nationality_id',
//            'profession_id',
        ],
    ]) ?>

</div>

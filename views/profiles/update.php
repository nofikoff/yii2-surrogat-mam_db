<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profiles */

$this->title = 'Update Profiles: ' . str_pad($model->id, 4, '0', STR_PAD_LEFT) . " - " .$model->name_hiden;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profiles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

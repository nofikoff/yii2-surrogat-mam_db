<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nationality */

$this->title = 'Create Nationality';
$this->params['breadcrumbs'][] = ['label' => 'Nationalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nationality-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profiles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profiles-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'name_hiden')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'comment_hidden')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'experience')->dropDownList(
                [
                    "0" => "нет",
                    "1" => "есть",
                ]
                ,
                [
                    'prompt' => '-Select one-',
                ]);
            ?>


            <?= $form->field($model, 'weight')->textInput() ?>

            <?= $form->field($model, 'height')->textInput() ?>

            Примечание: точная дата нужна для расчета текущего возраста. Дата рождения нигде не светится
            <?= $form->field($model, 'birthday')->textInput() ?>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'bloodtype')->dropDownList(
                Yii::$app->params['bloodtype']
                ,
                [
                    'prompt' => '-Select one-',
                ]);
            ?>

            <?= $form->field($model, 'status_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Status::find()->orderBy('name_status')->asArray()->all(), 'id', 'name_status'),
                [
                    'prompt' => '-Select one-',
                ]);
            ?>


            <?= $form->field($model, 'education_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Education::find()->orderBy('name_education')->asArray()->all(), 'id', 'name_education'),
                [
                    'prompt' => '-Select one-',
                ]);
            ?>


            <?= $form->field($model, 'nationality_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Nationality::find()->orderBy('name_nationality')->asArray()->all(), 'id', 'name_nationality'),
                [
                    'prompt' => '-Select one-',
                ]);
            ?>


            <?= $form->field($model, 'profession_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\models\Profession::find()->orderBy('name_profession')->asArray()->all(), 'id', 'name_profession'),
                [
                    'prompt' => '-Select one-',
                ]);
            ?>

        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

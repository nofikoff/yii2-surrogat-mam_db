<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfilesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
    /*#profilessearch-status_id input[type="radio"] {*/
    /*    display: none;*/
    /*}*/
    #profilessearch-status_id label {
        height: 30px;
        display: inline-block;
        padding: 4px 9% 0 4px;
        font-size: 16px;
        cursor: pointer;
    }

    #profilessearch-status_id label.checked {

        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }
</style>

<div class="profiles-search">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]);

    echo $form
        ->field($model, 'status_id')
        //->inline()
        ->radioList(
            \yii\helpers\ArrayHelper::map(
                \app\models\Status::find()
                    ->select('id, name_status')
                    ->all(),
                'id',
                'name_status'
            )
        )
    //    ->label(false)
    ?>

    <div class="row">
        <div class="col-md-6">
            <?=
            $form->field($model, 'experience')
                ->dropDownList(
                    ["0" => "нет",
                        "1" => "есть"],
                    ['prompt' => '- не важно -']

                )

            ?>
            <?=
            $form->field($model, 'profession_id')
                ->dropDownList(
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Profession::find()
                            ->select('id, name_profession')
                            ->all(),
                        'id',
                        'name_profession'
                    ),
                    ['prompt' => '- не важно -']
                )
            ?>
        </div>
        <div class="col-md-6">
            <?=
            $form->field($model, 'education_id')
                ->dropDownList(
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Education::find()
                            ->select('id, name_education')
                            ->all(),
                        'id',
                        'name_education'
                    ),
                    ['prompt' => '- не важно -']
                )
            ?>
            <?=
            $form->field($model, 'nationality_id')
                ->dropDownList(
                    \yii\helpers\ArrayHelper::map(
                        \app\models\Nationality::find()
                            ->select('id, name_nationality')
                            ->all(),
                        'id',
                        'name_nationality'
                    ),
                    ['prompt' => '- не важно -']
                )
            ?>

        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Сбросить', ['/'], ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    // https://stackoverflow.com/questions/45338238/how-to-style-the-parent-label-of-a-checked-radio-input/45338834
    // инициализация
    let mychecked = document.querySelector("input:checked")
    if (mychecked) mychecked.parentElement.classList.add("checked");
    //
    let form = document.getElementById("w0");
    form.addEventListener("change", (evt) => {
        let trg = evt.target,
            trg_par = trg.parentElement;
        if (trg.type === "radio" && trg_par &&
            trg_par.tagName.toLowerCase() === "label") {
            let prior = form.querySelector('label.checked input[name="' +
                trg.name + '"]');
            if (prior) {
                prior.parentElement.classList.remove("checked");
            }
            trg_par.classList.add("checked");
        }
    }, false);
</script>

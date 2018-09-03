<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Stats */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box">
    <div class="box-header with-border">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->textInput() ?>

     <div class="clearfix"></div>
            <hr>
            <div class="row">

                <div class="col-md-12">
                    <div class="container">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
     </div>
                </div>
            </div>

        </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>

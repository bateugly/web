<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\statSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="store-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['data-pjax' => true ]
    ]); ?>

    <div class="panel panel-default">
        <div class="panel-heading with-border">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                    <button type="button" class="btn btn-default glyphicon glyphicon-search">ค้นหาข้อมูล</button>
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="col-md-4">

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'score') ?>

   <div class="form-group">
                        <?= Html::submitButton('ค้นหา', ['class' => 'btn btn-default']) ?>
                        <?= Html::resetButton('ยกเลิก', ['class' => 'btn btn-default']) ?>
                    </div>
                </div>

            </div>
        </div>


        <?php ActiveForm::end(); ?>

    </div>

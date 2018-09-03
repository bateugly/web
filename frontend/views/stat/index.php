<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\statSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'panel'=>[
                'before'=>' '
            ],
            'toolbar' => [
                [
                    'content'=>
                        Html::a('เพิ่มผู้ขาย', ['create'], ['class' => 'btn btn-default']) ,
                ],
                '{export}',
                '{toggleData}'
            ],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'score',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

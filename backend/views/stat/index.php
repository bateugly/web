<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\statSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stats';
?>
<?=
Breadcrumbs::widget([
    'homeLink' =>  [
        'label' => Yii::t('yii', 'หน้าแรก'),
        'url' => ['index'],
    ],
    'links' => [ [
        'label' => $this->title,

        /*'template' => "<li><b>{link}</b></li>\n",*/
    ],
    ],
]);
?>
<div class="box">
    <div class="box-header with-border">

        <div class="">
            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>[
            'before'=>''
        ],
        'toolbar' => [
            [
                'content'=>
                    Html::a('เพิ่มแผง', ['create'], ['class' => 'btn btn-default']) ,
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

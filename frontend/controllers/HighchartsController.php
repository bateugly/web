<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\stats;

class HighchartsController extends Controller
{
public function actionIndex()
{

	$modelstats = new stats();
	$modelstats = Stats::find()->all();
	            
	return $this->render('index', [
                'modelstats' => $modelstats,
            ]);
}

}
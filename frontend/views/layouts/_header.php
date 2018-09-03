<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use frontend\models\User;
AppAsset::register($this);
?>



    <nav class="[ navbar navbar-fixed-top ][ navbar-bootsnipp animate ]" role="navigation">
        <div class="[ container ]">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="[ navbar-header ]">

                <button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="[ sr-only ]">Toggle navigation</span>
                    <span class="[ icon-bar ]"></span>
                    <span class="[ icon-bar ]"></span>
                    <span class="[ icon-bar ]"></span>
                </button>
                <div class="[ animbrand ]">
                    <a class="[ navbar-brand ][ animate ]" href="<?= Url::to(['site/index']);?>">การสำรวจประชากรสูงอายุในประเทศไทย</a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="[ collapse navbar-collapse ]" id="bs-example-navbar-collapse-1">
                <ul class="[ nav navbar-nav navbar-right ]">
                    <li><a href="<?= Url::to(['site/index']);?>" class="[ animate ]"><i class="fa fa-fw fa-home"></i>หน้าแรก</a></li>
                    <li class="[ dropdown ]">
                        <a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">Resources <span class="[ caret ]"></span></a>
                        <ul class="[ dropdown-menu ]" role="menu">
                            <li><a href="#" class="[ animate ]">Blog <span class="[ pull-right glyphicon glyphicon-pencil ]"></span></a></li>
                            <li><a href="#" class="[ animate ]">List of resources <span class="[ pull-right glyphicon glyphicon-align-justify ]"></span></a></li>
                            <li><a href="#" class="[ animate ]">Download Bootstrap <span class="[ pull-right glyphicon glyphicon-cloud-download ]"></span></a></li>
                            <li class="[ dropdown-header ]">Bootstrap Templates</li>
                            <li><a href="#" class="[ animate ]">Browse Templates <span class="[ pull-right glyphicon glyphicon-shopping-cart ]"></span></a></li>
                            <li class="[ dropdown-header ]">Builders</li>
                            <li><a href="#" class="[ animate ]">Form Builder <span class="[ pull-right glyphicon glyphicon-tasks ]"></span></a></li>
                            <li><a href="#" class="[ animate ]">Button Builder <span class="[ pull-right glyphicon glyphicon-edit ]"></span></a></li>
                        </ul>
                    </li>
                    <li class="[ dropdown ]">
                        <a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">Snippets <span class="[ caret ]"></span></a>
                        <ul class="[ dropdown-menu ]" role="menu">
                            <li><a href="#" class="[ animate ]">Featured <span class="[ pull-right glyphicon glyphicon-star ]"></span></a></li>
                            <li><a href="#" class="[ animate ]">Tags  <span class="[ pull-right glyphicon glyphicon-tags ]"></span></a></li>
                            <li class="[ dropdown-header ]">By Bootstrap Version</li>
                            <li><a href="#" class="[ animate ]">3.2.0</a></li>
                            <li><a href="#" class="[ animate ]">3.1.0</a></li>
                            <li><a href="#" class="[ animate ]">3.0.3</a></li>
                            <li><a href="#" class="[ animate ]">3.0.1</a></li>
                            <li><a href="#" class="[ animate ]">3.0.0</a></li>
                            <li><a href="#" class="[ animate ]">2.3.2</a></li>
                        </ul>
                    </li>
                   <li><a class="animate" href="<?= Url::to(['site/login']);?>"><i class="fa fa-phone"></i>ติดต่อ</a></li>
                   <?php if (Yii::$app->user->isGuest) {   ?> 
                    <li><a class="animate" href="<?= Url::to(['site/login']);?>"><i class="fa fa-fw fa-sign-in"></i>เข้าสู่ระบบ</a></li>
                    <?php }else{ ?>
                    <li class="[ dropdown ]">
                        <a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">User Profile
                            <?php $user = User::find()->where(['id'=> Yii::$app->user->identity->id])->one(); 
                                echo "(" . $user->username . ")";?><span class="[ caret ]"></span></a>
                        <ul class="[ dropdown-menu ]" role="menu">
                            <li><a href="#" class="[ animate ]">Featured <span class="[ pull-right glyphicon glyphicon-star ]"></span></a></li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            <li>
                                <?= Html::a(
                                    'ออกจากระบบ',
                                    ['/site/logout'],
                                    ['data-method' => 'post']
                                ) ?>
                            </li>
   
                        </ul>
                    </li>

<?php } ?>

                    
                </ul>
            </div>
        </div>

    </nav>

   



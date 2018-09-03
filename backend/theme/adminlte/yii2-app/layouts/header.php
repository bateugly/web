<?php
use yii\helpers\Html;
use backend\models\User;


/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->
            
                
              
                <!-- User Account: style can be found in dropdown.less -->

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

                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

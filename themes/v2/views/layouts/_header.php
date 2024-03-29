<?php

use app\models\Menu as Menu2;
use yii\helpers\Html;
use yii\widgets\Menu;
use app\models\Config;

?>

<!--header start-->
<div class="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                    <div class="contact_info_wrapper">
                        <ul>
                            <li><a href="mailto:<?= Config::getAppContactEmail() ?>"><i class="fa fa-envelope"></i> <?= Config::getAppContactEmail() ?></a></li>
                            <li class="contact_number_wrapper hidden-xs"><a href="tel:<?= Config::getAppContactPhone() ?>"><i class="fa fa-phone"></i> <?= Config::getAppContactPhone() ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                    <!-- signin_and_social_icon_wrapper -->
                    <div class="signin_and_social_icon_wrapper">
                        <ul>
                            <li class="social_icon_wrapper hidden-xs">
                                <?= Menu::widget([
                                    'items' => [
                                        [
                                            'label' => '<i class=\'fa fa-facebook-square\'></i>',
                                            'url' => Config::getAppAccountFacebook(),
                                            'options' => ['target'=>'_blank'],
                                            'encode' => false,
                                        ],
                                        [
                                            'label' => '<i class=\'fa fa-twitter-square\'></i>',
                                            'url' => Config::getAppAccountTwitter(),
                                            'options' => ['target'=>'_blank'],
                                            'encode' => false,
                                        ],
                                        [
                                            'label' => '<i class=\'fa fa-google-plus\'></i>',
                                            'url' => Config::getAppAccountGooglePlus(),
                                            'options' => ['target'=>'_blank'],
                                            'encode' => false,
                                        ],
                                    ],
                                ]) ?>
                            </li>
                            <!-- Cart Option -->
                            <?= app\widgets\MemberSigninWidget::widget() ?>
                            <!-- /.Cart Option -->
                        </ul>
                    </div>
                    <!-- /.signin_and_social_icon_wrapper end -->
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <div class="main_menu_wrapper hidden-xs hidden-sm">
        <nav class="navbar mega-menu navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header hidden-xs hidden-sm">
                    <?= Html::a(
                        //Html::img('https://via.placeholder.com/150x35/4285f4/555555?text=LOGO 150x25', ['alt'=>'Logo ' . Yii::$app->name, 'class'=>'logo-dark']),
                        Html::img(['data/img/logo.jpg'], ['alt'=>'Logo ' . Yii::$app->name, 'class'=>'logo-dark', 'width' => 50]),
                        ['/site/index'], 
                        [
                            'class' =>'navbar-brand',
                        ]
                    ) ?>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <?= Menu::widget([
                        'options' => ['class'=>'nav navbar-nav navbar-right'],
                        'submenuTemplate' => '<ul class=\'dropdown-menu dropdown-menu-right\'>{items}</ul>',
                        'items' => (new Menu2())->getMenus(Menu2::CATEGORY_MAIN, [], ['class' => 'dropdown']),
                    ]) ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
    <!-- .site-nav -->
    <div class="mobail_menu_main visible-xs visible-sm">
        <div class="navbar-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <?= Html::a(
                            //Html::img('https://via.placeholder.com/150x35/4285f4/555555?text=LOGO 150x25', ['alt'=>'Logo ' . Yii::$app->name, 'class'=>'logo-dark']),
                            Html::img(['data/img/logo.jpg'], ['alt'=>'Logo ' . Yii::$app->name, 'class'=>'logo-dark', 'width' => 50]),
                            ['/site/index'], 
                            [
                                'class' =>'navbar-brand',
                            ]
                        ) ?>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <button type="button" class="navbar-toggle collapsed" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <?= Html::a(
                //Html::img('https://via.placeholder.com/150x35/4285f4/555555?text=LOGO 150x25', ['alt'=>'Logo ' . Yii::$app->name, 'class'=>'logo-dark']),
                Html::img([Config::getAppLogo()], ['alt'=>'Logo ' . Yii::$app->name, 'class'=>'logo-dark', 'width' => 50]),
                ['/site/index'], 
                [
                    'class' =>'navbar-brand',
                ]
            ) ?>
            <div id="toggle_close">&times;</div>
            <div id='cssmenu'>
                <?= Menu::widget([
                    'options' => ['class'=>'nav navbar-nav navbar-right'],
                    'submenuTemplate' => '<ul>{items}</ul>',
                    'items' => (new Menu2())->getMenus(Menu2::CATEGORY_MAIN, [], ['class' => 'has-sub']),
                ]) ?>
            </div>
        </div>
    </div>
</div>
<!-- header end -->
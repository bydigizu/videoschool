<?php
    use \yii\bootstrap\NavBar;
    use \yii\bootstrap\Nav;
?>
<?php
    $this->beginPage();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $this->head();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video School</title>
</head>
<body>
    <?php
    $this->beginBody();
    ?>
    <?php 
    
    NavBar::begin([
        'brandLabel' => 'VideoScool',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top'
        ]
    ]);
    if(Yii::$app->user->isGuest){
        $menu = [
            ['label'=>'Join', 'url'=>['/user/join']],
            ['label'=>'Login', 'url'=>['/user/login']]
        ];
    } else {
        $menu = [
            ['label'=> Yii::$app->user->getIdentity()->name],
            ['label'=>'Logout', 'url'=>['/user/logout']]
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menu
    ]);
    NavBar::end();
    ?>
    <div class="container" style="margin-top: 80px">
    <?= $content ?>
    </div>
    <?php
    $this->endBody();
    ?>
</body>
</html>
<?php
    $this->endPage();
?>
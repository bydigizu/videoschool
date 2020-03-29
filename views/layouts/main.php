<?php
    use \yii\bootstrap\NavBar;
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
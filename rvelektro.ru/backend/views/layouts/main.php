<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
     <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php

    NavBar::begin([

        'options' => [
            'class' => 'navbar-inverse navbar-fixed-left',
            'id' => 'left_main_menu',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {
      $menuItems = [
          ['label' => ' ПАНЕЛЬ УПРАВЛЕНИЯ', 'url' => ['/']],
              ['label' => 'Заявки', 'url' => ['/callback/index']],
            ['label' => 'Партнеры', 'url' => ['/partners/index']],
                ['label' => 'Служебные статьи', 'url' => ['/servis-articles/index']],
            ['label' => 'Страница Главная', 'url' => ['/index/index']],
            ['label' => 'О нас', 'url' => ['/about/index']],
            ['label' => 'Сотрудники', 'url' => ['/workers/index']],

            ['label' => 'Блог\Новости', 'url' => ['/blog/index']],
            ['label' => 'Категории', 'url' => ['/category/index']],
            ['label' => 'Товары', 'url' => ['/product/index']],
            ['label' => 'Проекты', 'url' => ['/proect/index']],
            ['label' => 'Решения', 'url' => ['/decision/index']],

            ['label' => 'Контакты', 'url' => ['/contact/index']],
              ['label' => 'Адреса магазинов на карте', 'url' => ['/contact-shops/index']],
      ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav '],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

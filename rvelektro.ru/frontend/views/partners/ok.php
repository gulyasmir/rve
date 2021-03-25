<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PartnersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Партнеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-ok">
<div class="container">
    <h1>Спасибо за регистрацию!</h1>
    <br>
  <h2>В ближайшее время мы свяжемся с Вами.</h2>
<hr>
    <p>
        <?= Html::a('Вернуться на сайт', ['site/index'], ['class' => 'btn btn-success']) ?>
    </p>
    <hr>
</div>
</div>

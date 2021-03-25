<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Index */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Страница Главная', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'keywords',
            'title1:ntext',
            'text1:ntext',
            'title2:ntext',
            'text2:ntext',
            'text3:ntext',
            'icon1text:ntext',
            'icon2text:ntext',
            'icon3text:ntext',
            'icon4text:ntext',
            'icon5text:ntext',
            'icon6text:ntext',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ServisArticles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Служебные статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servis-articles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'text:ntext',
        //  'to_menu:html',
            [
              'label'=>'Показывать в меню',
              'value' => $model->to_menu == 1 ? 'Да' : 'Нет'
            ],
        ],
    ]) ?>

</div>

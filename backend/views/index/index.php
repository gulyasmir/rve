<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IndexSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страница Главная';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>Страница "Главная" должна быть одна.  Если создать несколько - то будет отображаться первая.</p>
        <p>
            <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'keywords',
            'title1:ntext',
            // 'text1:ntext',
            // 'title2:ntext',
            // 'text2:ntext',
            // 'text3:ntext',
            // 'icon1text:ntext',
            // 'icon2text:ntext',
            // 'icon3text:ntext',
            // 'icon4text:ntext',
            // 'icon5text:ntext',
            // 'icon6text:ntext',
            // 'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

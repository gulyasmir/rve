<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServisArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Служебные статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servis-articles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
            'text:ntext',

      //  'to_menu',
      [
          'label' => 'Показывать в меню',
          'value' => function ($data) {
            if ($data->to_menu == 1) {
              return  'Да' ;
            } else {
                return  'Нет';
            }


          }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

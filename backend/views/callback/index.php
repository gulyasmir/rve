<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CallbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="callback-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr/>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <hr/>
    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'customemail:email',
            'date:date',
          //  'processed',
            [
                'label' => 'Заявка обработана',
                'value' => function ($data) {
                  if ($data->processed == 1) {
                    return  'Да' ;
                  } else {
                      return  'Нет';
                  }


                }],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

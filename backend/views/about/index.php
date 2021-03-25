<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страница О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<p>Страница "О нас" должна быть одна.  Если создать несколько - то будет отображаться первая.</p>
    <p>
        <?= Html::a('Создать ', ['create'], ['class' => 'btn btn-success']) ?>
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
          //  'video:ntext',
            // 'title1',
            // 'text1:ntext',
            // 'title2',
            // 'text2:ntext',
            // 'title3',
            // 'text3:ntext',
            // 'title4',
            // 'text4:ntext',
            // 'title5',
            // 'text5:ntext',
            // 'title6',
            // 'text6',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

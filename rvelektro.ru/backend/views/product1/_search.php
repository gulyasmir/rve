<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Category;
/* @var $this yii\web\View */
/* @var $model backend\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */

$category = Category::find()->all();
$category  = ArrayHelper::map($category , 'id','title');

$params = [
       'prompt' => 'Выберите категорию ',
       'options' => [
           '0' => ['Selected' => true]
       ]
   ];
?>
<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
  <div class="col-md-5">
  <?php
      echo   $form->field($model, 'id_category')->dropDownList($category, $params)->label('Категория');
  ?>
</div>
<div class="col-md-5">
    <?= $form->field($model, 'title') ?>
</div>
<div class="col-md-2">
  <br>
<?=  $form->field($model, 'to_index')
    ->checkbox([
        'label' => 'На главной',
        'labelOptions' => [
            'style' => 'padding-left:20px;'
        ],
        'disabled' => false
    ]); ?>
  </div>
</div>
  <?php echo $form->field($model, 'tags') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

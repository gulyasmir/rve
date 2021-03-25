<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->title =  'Проекты компании RVElectro';
$this->registerMetaTag([
  'name' => 'description',
  'content' =>  $query->title,
]);
$this->registerMetaTag([
'name' => 'keywords',
   'content' => $query->title,
]);

//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-page">
  <section class="breadcrumbs">
		<div class="container">
      <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
		</div>
	</section>
  	<section class="proects-section">
        <h1><?= Html::encode($this->title) ?></h1>
      <div class="row">
<?php //print_r($proects);?>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <?php if ($proects['0']) echo Html::a('
            <div class="profit">
              <div class="profit__icon">
                <img src="'.$proects['0']->img1.'" alt="'.$proects['0']->title.'">
              </div>
              <h3 class="profit__title title">
            '.$proects['0']->title.'
              </h3>
            </div>
            ', ['site/proect', 'id' => $proects['0']->id]) ?>
        </div>

        <div class="col-lg-6 col-md-6 col-xs-12">
          <?php if ($proects['1']) echo Html::a('
            <div class="profit">
              <div class="profit__icon">
                <img src="'.$proects['1']->img1.'" alt="'.$proects['1']->title.'">
              </div>
              <h3 class="profit__title title">
            '.$proects['1']->title.'
              </h3>
            </div>
            ', ['site/proect', 'id' => $proects['1']->id]) ?>
        </div>
</div>
<div class="row">
        <div class="col-lg-3 col-md-3 col-xs-6">
              <?php if ($proects['2']) echo Html::a('
            <div class="profit">
              <div class="profit__icon">
                <img src="'.$proects['2']->img1.'" alt="'.$proects['2']->title.'">
              </div>
              <h3 class="profit__title title">
            '.$proects['2']->title.'
              </h3>
            </div>
            ', ['site/proect', 'id' => $proects['2']->id]) ?>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-6">
        <?php if ($proects['3']) echo Html::a('
            <div class="profit">
              <div class="profit__icon">
                <img src="'.$proects['3']->img1.'" alt="'.$proects['3']->title.'">
              </div>
              <h3 class="profit__title title">
            '.$proects['3']->title.'
              </h3>
            </div>
            ', ['site/proect', 'id' => $proects['3']->id]) ?>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-6">
            <?php if ($proects['4']) echo Html::a('
            <div class="profit">
              <div class="profit__icon">
                <img src="'.$proects['4']->img1.'" alt="'.$proects['4']->title.'">
              </div>
              <h3 class="profit__title title">
            '.$proects['4']->title.'
              </h3>
            </div>
            ', ['site/proect', 'id' => $proects['4']->id]) ?>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-6">
            <?php if ($proects['5']) echo  Html::a('
            <div class="profit">
              <div class="profit__icon">
                <img src="'.$proects['5']->img1.'" alt="'.$proects['5']->title.'">
              </div>
              <h3 class="profit__title title">
            '.$proects['5']->title.'
              </h3>
            </div>
            ', ['site/proect', 'id' => $proects['5']->id]) ?>
        </div>
      </div>
      <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['6']) echo Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['6']->img1.'" alt="'.$proects['6']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['6']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['6']->id]) ?>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['7']) echo Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['7']->img1.'" alt="'.$proects['7']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['7']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['7']->id]) ?>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['8']) echo  Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['8']->img1.'" alt="'.$proects['8']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['8']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['8']->id]) ?>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['9']) echo Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['9']->img1.'" alt="'.$proects['9']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['9']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['9']->id]) ?>
                </div>
              </div>
              <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <?php if ($proects['10']) echo  Html::a('
                            <div class="profit">
                              <div class="profit__icon">
                                <img src="'.$proects['10']->img1.'" alt="'.$proects['10']->title.'">
                              </div>
                              <h3 class="profit__title title">
                            '.$proects['10']->title.'
                              </h3>
                            </div>
                            ', ['site/proect', 'id' => $proects['10']->id]) ?>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                          <?php if ($proects['11']) echo  Html::a('
                            <div class="profit">
                              <div class="profit__icon">
                                <img src="'.$proects['11']->img1.'" alt="'.$proects['11']->title.'">
                              </div>
                              <h3 class="profit__title title">
                            '.$proects['11']->title.'
                              </h3>
                            </div>
                            ', ['site/proect', 'id' => $proects['11']->id]) ?>
                        </div>

                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <?php if ($proects['12']) echo Html::a('
                        <div class="profit">
                          <div class="profit__icon">
                            <img src="'.$proects['12']->img1.'" alt="'.$proects['12']->title.'">
                          </div>
                          <h3 class="profit__title title">
                        '.$proects['12']->title.'
                          </h3>
                        </div>
                        ', ['site/proect', 'id' => $proects['12']->id]) ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <?php if ($proects['13']) echo  Html::a('
                        <div class="profit">
                          <div class="profit__icon">
                            <img src="'.$proects['13']->img1.'" alt="'.$proects['13']->title.'">
                          </div>
                          <h3 class="profit__title title">
                        '.$proects['13']->title.'
                          </h3>
                        </div>
                        ', ['site/proect', 'id' => $proects['13']->id]) ?>
                    </div>
                    </div>
  <div class="col-lg-6 col-md-6 col-xs-12">
    <?php  $textcontactform = 'светотехническое проектирование';
    include "contactform3.php"; ?>
                    </div>
      </div>
      <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['17']) echo  Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['14']->img1.'" alt="'.$proects['14']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['14']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['14']->id]) ?>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['15']) echo  Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['15']->img1.'" alt="'.$proects['15']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['15']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['15']->id]) ?>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['16']) echo  Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['16']->img1.'" alt="'.$proects['16']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['16']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['16']->id]) ?>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <?php if ($proects['17']) echo  Html::a('
                    <div class="profit">
                      <div class="profit__icon">
                        <img src="'.$proects['17']->img1.'" alt="'.$proects['17']->title.'">
                      </div>
                      <h3 class="profit__title title">
                    '.$proects['17']->title.'
                      </h3>
                    </div>
                    ', ['site/proect', 'id' => $proects['17']->id]) ?>
                </div>
  </div>
  	</section>
    <?php  $textcontactform = ' Начните работать с нами';
    include "contactform1.php"; ?>

</div>

<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Добро пожаловать в панель управления';
?>
<div class="site-index">
    <div class="body-content">
<br><br><br><br>
      <h1>Добро пожаловать в панель управления</h1>

      <div>


                        <?= Html::a('Изменить пароль', ['site/request-password-reset']) ?>
                    </div>

    </div>
</div>

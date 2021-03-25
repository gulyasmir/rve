<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->registerMetaTag([
  'name' => 'description',
  'content' => 'Контакты компании RVElectro',
]);
$this->registerMetaTag([
'name' => 'keywords',
   'content' =>'Контакты компании RVElectro',
]);

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact container">
    <h1><?= Html::encode($this->title) ?></h1>
      <hr>
      	<div class="row">
<div id="map"></div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=134b6bf1-b952-442b-92d3-b7493883155c" type="text/javascript"></script>
 <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>

 <script src="object_list.js" type="text/javascript"></script>


 <script>
 var groups = [
        {
            name: "Известные памятники",
            style: "islands#redIcon",
            items: [
                {
                    center: [50.426472, 30.563022],
                    name: "Монумент &quot;Родина-Мать&quot;"
                },
                {
                    center: [50.45351, 30.516489],
                    name: "Памятник &quot;Богдану Хмельницкому&quot;"
                },
                {
                    center: [50.454433, 30.529874],
                    name: "Арка Дружбы народов"
                }
            ]},
        {
            name: "Покушайки",
            style: "islands#greenIcon",
            items: [
                {
                    center: [50.50955, 30.60791],
                    name: "Ресторан &quot;Калинка-Малинка&quot;"
                },
                {
                    center: [50.429083, 30.521708],
                    name: "Бар &quot;Сало-бар&quot;"
                },
                {
                    center: [50.450843, 30.498271],
                    name: "Абсент-бар &quot;Палата №6&quot;"
                },
                {
                    center: [50.454834, 30.516498],
                    name: "Ресторан &quot;Спотыкач&quot;"
                }
            ]},
        {
            name: "Оригинальные музейчики",
            style: "islands#orangeIcon",
            items: [
                {
                    center: [50.443334, 30.520163],
                    name: "Музей грамзаписи и старинных музыкальных инструментов"
                },
                {
                    center: [50.446977, 30.505269],
                    name: "Музей истории медицины или Анатомический театр"
                },
                {
                    center: [50.452512, 30.530889],
                    name: "Музей воды. Водно-информационный центр"
                }
            ]},
        {
            name: "Красивости",
            style: "islands#blueIcon",
            items: [
                {
                    center: [50.45987, 30.516174],
                    name: "Замок Ричарда-Львиное сердце"
                },
                {
                    center: [50.445049, 30.528598],
                    name: "&quot;Дом с химерами&quot;"
                },
                {
                    center: [50.449156, 30.511809],
                    name: "Дом Рыцаря"
                }
            ]}
    ];
 </script>

 <script>

 ymaps.ready(init);

function init() {

    // Создание экземпляра карты.
    var myMap = new ymaps.Map('map', {
            center: [50.443705, 30.530946],
            zoom: 14
        }, {
            searchControlProvider: 'yandex#search'
        }),
        // Контейнер для меню.
        menu = $('<ul class="menu"/>');

    for (var i = 0, l = groups.length; i < l; i++) {
        createMenuGroup(groups[i]);
    }

    function createMenuGroup (group) {
        // Пункт меню.
        var menuItem = $('<li><a href="#">' + group.name + '</a></li>'),
        // Коллекция для геообъектов группы.
            collection = new ymaps.GeoObjectCollection(null, { preset: group.style }),
        // Контейнер для подменю.
            submenu = $('<ul class="submenu"/>');

        // Добавляем коллекцию на карту.
        myMap.geoObjects.add(collection);
        // Добавляем подменю.
        menuItem
            .append(submenu)
            // Добавляем пункт в меню.
            .appendTo(menu)
            // По клику удаляем/добавляем коллекцию на карту и скрываем/отображаем подменю.
            .find('a')
            .bind('click', function () {
                if (collection.getParent()) {
                    myMap.geoObjects.remove(collection);
                    submenu.hide();
                } else {
                    myMap.geoObjects.add(collection);
                    submenu.show();
                }
            });
        for (var j = 0, m = group.items.length; j < m; j++) {
            createSubMenu(group.items[j], collection, submenu);
        }
    }

    function createSubMenu (item, collection, submenu) {
        // Пункт подменю.
        var submenuItem = $('<li><a href="#">' + item.name + '</a></li>'),
        // Создаем метку.
            placemark = new ymaps.Placemark(item.center, { balloonContent: item.name });

        // Добавляем метку в коллекцию.
        collection.add(placemark);
        // Добавляем пункт в подменю.
        submenuItem
            .appendTo(submenu)
            // При клике по пункту подменю открываем/закрываем баллун у метки.
            .find('a')
            .bind('click', function () {
                if (!placemark.balloon.isOpen()) {
                    placemark.balloon.open();
                } else {
                    placemark.balloon.close();
                }
                return false;
            });
    }

    // Добавляем меню в тэг BODY.
    menu.appendTo($('body'));
    // Выставляем масштаб карты чтобы были видны все группы.
    myMap.setBounds(myMap.geoObjects.getBounds());
}
</script>



  	<div class="col-lg-6 col-xl-6">

      <p>
            Адрес <?=$query->text1?>
        </p>
  </div>
  <div class="col-lg-6 col-xl-6">
    <p>
        Телефоны
    </p>
    <p>
         <?=$query->tel1?>
    </p>
    <p>
         <?=$query->tel2?>
    </p>
  </div>
    </div>
  <hr>
<div>
     <?=$query->text1?>
</div>
  <hr>
<div>
     <?=$query->text2?>
</div>
  <hr>
    <div class="row">
        <div class="col-lg-12 col-xs-12">

              <?php  $textcontactform = 'Для архитекторов и дизайнеров мы предлагаем особые условия сотрудничества!';
              include "contactform1.php"; ?>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <?=$query->text3?>

           </div>
       </div>
</div>

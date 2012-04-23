
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">

<head>
<meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml; charset=UTF-8"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/wapage/style.css" type="text/css"/>
<title>waPAGE.net</title>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/wapage/accordian.pack.js"></script>
</head>

<body onload="new Accordian('tml',5,'non');">

<div id="logo">
<a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/wapage/images/logo.png" alt="" /></a>
</div>

<div id="head">
<a href="#">Вход</a>
<a href="#">Регистрация</a>
</div>

<div id="adv">
<a href="#">НЛО тут!</a><br />
<a href="#">Лучшие WAP-дизайны!</a><br />
<a href="#">Хостинг твоей мечты</a><br />
</div>

<div class="title">
<b><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/wapage/images/icom.png" alt="" /> Главная:</b>
</div>

<?php echo $content; ?>

<div id="banners">
<a href="#"><img src="http://rosban.su/20065.img?page" alt="rosban.su" /></a>
</div>

<div id="foot">
<a href="#">© waPAGE.net</a> | On: <a href="#">7/12</a>
</div>

<div id="count">
<a href="http://waplog.net/ru/c.shtml?47916"><img src="http://c.waplog.net/ru/47916.cnt" alt="waplog" /></a>
</div>

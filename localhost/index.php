<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "header.php" ?>
  <link rel="stylesheet" href="style.css">
  <title><?php echo $settings['site_name'] ?> - Home</title>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="enjoyhint/enjoyhint.min.js"></script>
<link href="enjoyhint/enjoyhint.css" rel="stylesheet">
<script src="hint-sequence.js"></script>
</head>
<body>
<div class="header">
      <h2>Добро Пожаловать на сайт клуба: Звизделики!</h2>
</div>
<div class="container_enter">
<br>
<br>
<div class="text"><h2>Вступление!</h2>
<img src="https://blog-food.ru/images/site/recipes/salads/0009-cezar/12.jpg" alt="Салат Цезарь" class="leftimg"><br>ХОТИТЕ НАУЧИТСЯ ТАКОМУ ЖЕ МАСТЕРСТВУ КУЛИНАРИИ КАК ИЗВЕСТНЫЕ ШЕФ ПОВАРА?! ТОГДА ТЕБЕ К НАМ! В КЛУБ "ЗВИЗДЕЛИКИ" КОТОРЫЕ НАУЧАТ ТЕБЯ ВКУСНО ГОТОВИТЬ!
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/pYbdbVu5qzE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="rightimg"></iframe><br>БЛАГОДОРЯ НАМ, У ТЕБЯ ПОЛУЧИТСЯ СДЕЛАТЬ ОТ ОБЫЧНОГО СУПА ДО САРСУЭЛА! ОТ ОБЫЧНЫХ ПОНЧИКОВ ДО ОГРОМНОГО ТОРТА! НОВОГОДНИЕ САЛАТИКИ, КЕКСИКИ, ПРАЗДНИЧНЫЕ ПРЯНИКИ И МНОГОЕ ДРУГОЕ!<br>
<br>
<br>
<br>
<br>
<br>
<img src="https://img.povar.ru/main/64/11/72/7f/nejnii_i_vkusnii_tortik_na_kefire-346154.JPG" alt="Торт" class="leftimg">ЧТО ВАМ НУЖНО ДЛЯ НЕЖНОГО И ВКУСНОГО ТОРТА В КЕФИРЕ? ВСЁ ПРОСТО! ДЛЯ ЭТОГО НАДО:
   <li>Кефир  — 1 Стакан</li>
   <li>Яйца  — 2 Штуки</li>
   <li>Сахар  — 2/3</li>
   <li>Сода  — 1 Чайная ложка</li>
   <li>Мука  — 2 Стакана</li>
   <li>Какао  — 1 Чайная ложка</li>
   <li>Сметана  — 400 Грамм (в крем)</li>
  <div class="wrapper">
<h2>Еда к новому году!</h2>
	<input type="radio" name="point" id="slide1" checked>
	<input type="radio" name="point" id="slide2">
	<input type="radio" name="point" id="slide3">
	<input type="radio" name="point" id="slide4">
	<input type="radio" name="point" id="slide5">
	<div class="slider">
		<div class="slides slide1"></div>
		<div class="slides slide2"></div>
		<div class="slides slide3"></div>
		<div class="slides slide4"></div>
		<div class="slides slide5"></div>
	</div>
	<div class="controls">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<label for="slide4"></label>
		<label for="slide5"></label>
	</div>
</div>
<br>
<br>
<br>
<p style="text-align: center;">А ВОТ КАК ГОТОВИТЬ СИЕЙ ВКУСНЕЙШИЙ ТОРТ, МОЖНО УЗНАТЬ ПО КНОПКЕ СНИЗУ!</p>
</div>
</div>
<h2>Что же ты ждёшь?! Вступай к нам!</h2>
<a href="Register.php" class="animated-button">ПРИСОЕДИНИТЬСЯ</a>
<?php include "footer.php" ?>
</body>
</html>
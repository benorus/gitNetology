<?php
	$name = 'Рустам';
	$age = '39';
	$email = 'bopriev@mail.ru';
	$city = 'Грозный';
	$aboutme = 'Не высыпаюсь!';
?>

<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Био</title>
</head>

<style>

	body {
		font-family: sans-serif;
	}

  dl {
  	display: table-row;
  }

  dt, dd {
  	display: table-cell;
  	padding: 5px 10px;
  }

</style>

<body>

	<h1>Страница пользователя <?= $name ?></h1>

	<dl>
		<dt>Имя</dt>
		<dd><?= $name ?></dd>
	</dl>

	<dl>
		<dt>Возраст</dt>
		<dd><?= $age ?></dd>
	</dl>

	<dl>
		<dt>Адрес электронной почты</dt>
		<dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
	</dl>

	<dl>
		<dt>Город</dt>
		<dd><?= $city ?></dd>
	</dl>

	<dl>
		<dt>О себе</dt>
		<dd><?= $aboutme ?></dd>
	</dl>
	
</body>
</html>
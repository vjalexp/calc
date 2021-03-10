<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(1);
//print_r($_REQUEST);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type='text/javascript' src='calc.js' ></script> 
<link rel='stylesheet' href='style.css' />
</head>
<body>
<h2>Калькулятор "Асток-Пресс"</h2>
<div id='module_box'>
<form action='' method='POST'>
<hr>
<h4>Модульная реклама</h4>
<div id='module_result'>
<?
if(isset($_REQUEST['module_submitter'])) {

$price_per_cm = 176;
echo "1 см<sup>2</sup> модульной рекламы-176 руб";

echo "<br>Цена рекламной площади: ";
switch ($_REQUEST['square']) {
	case '8':
		$s = 8;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '16':
		$s = 16;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '24':
		$s = 24;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '32':
		$s = 32;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '48':
		$s = 48;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '64':
		$s = 64;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '74':
		$s = 74;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '80':
		$s = 80;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '96':
		$l = 96;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '112':
		$s = 112;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '120':
		$s = 120;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '128':
		$s = 128;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '144':
		$s = 144;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '160':
		$s = 160;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '192':
		$s = 192;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '240':
		$s = 240;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '256':
		$s = 256;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '384':
		$s = 384;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '432':
		$s = 432;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
	case '816':
		$s = 816;
		echo $s." см<sup>2</sup> ";
		echo $price_per_cm*$s." руб";
		$pre_price = $price_per_cm*$s;
	break;
}

echo "<br>Наценка за рубрику: ";
switch ($_REQUEST['line']) {
	case 'otherLines':
		$l = "нет";
		echo $l;
	break;
	case 'firstLine':
		$l = 80;
		echo "Первая полоса ".$l."% ";
		$over_price = $pre_price*($l/100);
		echo $over_price." руб";
	break;
	case 'nearbyTV':
		$l = 60;
		echo "Рядом с ТВ ".$l."% ";
		$over_price = $pre_price*($l/100);
		echo $over_price." руб";
	break;
	case 'lastLine':
		$l = 30;
		echo "Последняя полоса ".$l."% ";
		$over_price = $pre_price*($l/100);
		echo $over_price." руб";
	break;
	case 'nearbyCross':
		$l = 20;
		echo "Рядом с кроссвордом ".$l."% ";
		$over_price = $pre_price*($l/100);
		echo $over_price." руб";
	break;
	case 'specialPlace':
		$l = 30;
		echo "Спецместо ".$l."% ";
		$over_price = $pre_price*($l/100);
		echo $over_price." руб";
	break;
}

echo "<br>Модуль повторится ".$_REQUEST['repeater']." раз ";

$final_module_price = ($pre_price+$over_price)*$_REQUEST['repeater'];
echo "<br><b>ИТОГО: ".$final_module_price." руб</b>";
}
?>
</div>
<p>
Рубрика
<select name='line'>
<option selected></option>
<option value='otherLines'>Остальные</option>
<option value='firstLine'>Первая полоса</option>
<option value='nearbyTV'>Рядом с ТВ</option>
<option value='lastLine'>Последняя полоса</option>
<option value='nearbyCross'>Рядом с кроссвордом</option>
<option value='specialPlace'>Спецместо</option>
</select>
</p>
<p>Площадь 
<select name='square'>
<option value='8'>8 кв.см.</option>
<option value='16'>16 кв.см.</option>
<option value='24'>24 кв.см.</option>
<option value='32'>32 кв.см.</option>
<option value='48'>48 кв.см.</option>
<option value='64'>64 кв.см.</option>
<option value='74'>74 кв.см.</option>
<option value='80'>80 кв.см.</option>
<option value='96'>96 кв.см.</option>
<option value='112'>112 кв.см.</option>
<option value='120'>120 кв.см.</option>
<option value='128'>128 кв.см.</option>
<option value='144'>144 кв.см.</option>
<option value='160'>160 кв.см.</option>
<option value='192'>192 кв.см.</option>
<option value='240'>240 кв.см.</option>
<option value='256'>256 кв.см.</option>
<option value='384'>384 кв.см.</option>
<option value='432'>432 кв.см.</option>
<option value='816'>816 кв.см.</option>
</select>
</p>
<p>
Повторов 
<input type='button' value='&lt;' onClick='stepMinus1()' />
<input type='text' id='repeater1' name='repeater' value='0' size='1' />
<input type='button' value='&gt;' onClick='stepPlus1()' />
</p>
<input type='submit' name='module_submitter' value='Рассчитать' />
<br>
<hr>
</form>
</div>

<!-- ********************************************* -->
<div id='string_box'>
<form action='' method='POST'>
<h4>Строчная реклама</h4>
<div id='string_result'>
<?php
if(isset($_REQUEST['string_submitter'])) {

echo "Цена за строку в рубрике: ";
switch ($_REQUEST['area']) {
	case 'med':
		echo "Медицина ";
		$a = 1600;
		echo $a." руб";
	break;
	case 'realty':
		echo "Недвижимость ";
		$a = 1350;
		echo $a." руб";
	break;
	case 'educ':
		echo "Обучение ";
		$a = 1600;
		echo $a." руб";
	break;
	case 'bills':
		echo "Покупка-продажа ц.бумаг ";
		$a = 1600;
		echo $a." руб";
	break;
	case 'tour':
		echo "Туризм ";
		$a = 1600;
		echo $a." руб";
	break;
	case 'other':
		echo "Остальные ";
		$a = 1100;
		echo $a." руб";
	break;
}

echo "<br>Количество строк: ".$_REQUEST['repeater2']." ";

$final_string_price = $a*$_REQUEST['repeater2'];
echo "<br><b>ИТОГО: ".$final_string_price." руб</b>";
}
?>
</div>
<p>Рубрика 
<select name='area'>
<option selected></option>
<option value='med'>Медицина</option>
<option value='realty'>Недвижимость</option>
<option value='educ'>Обучение</option>
<option value='bills'>Покупка-продажа ц.бумаг</option>
<option value='tour'>Туризм</option>
<option value='other'>Остальные</option>
</select>
</p>
<p>
Количество строк 
<input type='button' value='&lt;' onClick='stepMinus2()' />
<input type='text' id='repeater2' name='repeater2' value='0' size='1' />
<input type='button' value='&gt;' onClick='stepPlus2()' />
</p>
<input type='submit' name='string_submitter' value='Рассчитать' />
<br>
<hr>
</form>
</div>

<!-- ********************************************* -->

<div id='private_box'>
<form action='' method="POST">
<h4>Частные объявления</h4>
<p>
<textarea rows='7' cols='49' name="charcount" wrap="virtual"></textarea>
<div id='private_result'>
<?php

if(isset($_REQUEST['private_submitter'])) {

echo "Ваше объявление: '".$_REQUEST['charcount']."'. ";
echo "<br>Количество знаков: ".$_REQUEST['displaycount'].". ";
echo "<br>Стоимость одного знака - 11р.50к.";

$private_price = 11.5*$_REQUEST['displaycount'];
echo "<br>Цена объявления без надбавок: ".$private_price." руб";

if($_REQUEST['fats1']==TRUE) {
	echo "<br>Надбавка за: Жирный 30% ";
	$p = 30;
	$over_price_bold = $private_price*($p/100);
	echo $over_price_bold." рублей";
	}
else { $over_price_bold = 0 ." рублей"; }
if($_REQUEST['fats2']==TRUE) {
	echo "<br>Надбавка за: Рамка 30% ";
	$p = 30;
	$over_price_frame = $private_price*($p/100);
	echo $over_price_frame." рублей";
	}
else { $over_price_frame = 0 ." рублей"; }
if($_REQUEST['fats3']==TRUE) {
	echo "<br>Надбавка за: Заглавные буквы 30% ";
	$p = 30;
	$over_price_capital = $private_price*($p/100);
	echo $over_price_capital." рублей";
	}
else { $over_price_capital = 0 ." рублей"; }
if($_REQUEST['fats4']==TRUE) {
	echo "<br>Надбавка за: Спецместо 30% ";
	$p = 30;
	$over_price_vip = $private_price*($p/100);
	echo $over_price_vip." рублей";
	}
else { $over_price_vip = 0 ." рублей"; }

$final_private_price = $private_price + $over_price_bold + $over_price_frame + $over_price_capital + $over_price_vip;
echo "<br><b>ИТОГО: ".$final_private_price." руб</b>";
}
?>
</div>
<input type="button" value="Посчитать кол-во знаков"
onClick="countit(this)">
<input type="text" name="displaycount" id="displaycount" size="5">
<br>
<input type='checkbox' name='fats1' value='bold' /> жирный (+30%) <br>
<input type='checkbox' name='fats2' value='frame' /> рамка (+30%) <br>
<input type='checkbox' name='fats3' value='capital' /> заглавный (+30%) <br>
<input type='checkbox' name='fats4' value='vip' /> спецместо (+30%) <br>
</p>
<input type='submit' name='private_submitter' value='Рассчитать' />
<br>
</form>
</div>

</body>
</html>

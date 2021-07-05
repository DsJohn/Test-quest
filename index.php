<!DOCTYPE HTML>
<HTML>
<HEAD>
  <meta charset="UTF-8"/>
  <TITLE>Bank</TITLE>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="script.js"></script>
</HEAD>
<BODY>
<div>
<div class="logo">
<img src="Bank.png"/>
</div>

<a class="phone_top"> 8-800-100-5005 +7(3452)522-000   </a>
<table class="top-menu" cellspacing="0" cellpadding="0">
 <tr>
	<td class="first"><a href="/credit-cards/">Кредитные карты</a></td>
	<td class="active"><a href="/deposits/">Вклады</a></td>
	<td><a href="/debit-cards/">Дебетовая карта</a></td>
	<td><a href="/insurance/">Страхование</a></td>
	<td><a href="/friends/">Друзья</a></td>
	<td><a href="/internet-bank/">Интернет банк</a></td>
 </tr>

</table>

<div class="breadcrumbs"><a href="#">Главная</a> - <a href="#">Вклады</a> - Калькулятор</div>
<form action="/calc.php" method="post">
<div class="calc">
<div class="calc-logo">Калькулятор</div>
<table class="calc-table">
<tr>
<td class="calc-text">Дата оформления вклада</td>
<td><input type="date" name="DepositDate" class="input-box" id="datepicker" required></td>
<td>
</td>
</tr>
<tr>
<td class="calc-text">Сумма вклада</td>
<td><input type="number" name="DepositAmount" min="1000" max="3000000" class="input-box" id="input1" required></td>
<td>

<div class="slidecontainer">
  <input type="range" min="1000" max="3000000" value="1500000" class="slider" id="myRange1">
</div>
<div class="slider-text">1тыс. рублей &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 3000000</div>

</td>
</tr>
<tr>
<td class="calc-text">Срок вклада</td>
<td>
  <select name="DepositTerm" class="input-box">
    <option type="number" value="1">1 год</option>
	<option type="number" value="2">2 года</option>
	<option type="number" value="3">3 года</option>
	<option type="number" value="4">4 года</option>
	<option type="number" value="5">5 лет</option>
  </select>
</td>
<td>
</td>
</tr>
<tr>
<td class="calc-text">Пополнение вклада</td>
<td>
<input type="radio" name="AddingToDeposit" value="No" checked="checked"> Нет
<input type="radio" name="AddingToDeposit" value="Yes"> Да
</td>
<td>
</td>
</tr>
<tr>
<td class="calc-text">Сумма пополнения вклада</td>
<td>
<input type="number" name="AddingToDepositAmount" min="1000" max="3000000" class="input-box" id="input2">
</td>
<td>
<div class="slidecontainer">
  <input type="range" min="1000" max="3000000" value="1500000" class="slider" id="myRange2">
</div>
<div class="slider-text">1тыс. рублей &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 3000000</div>
</td>
</tr>
</table>
<table class="result-table">
<tr>
<td width="45%"><input type="submit" value="Рассчитать" class="input-button"></td>
<td><div id="result-text">Результат: </div></td>
<td><div id="result"></div></td>
</tr>
</table>
</div>
</form>
<div class="bottom">
<table class="bottom-menu" cellspacing="0" cellpadding="0">
<tr>
<td><a href="/credit-cards/">Кредитные карты</a></td>
<td ><a href="/deposits/">Вклады</a></td>
<td><a href="/debit-cards/">Дебетовая карта</a></td>
<td><a href="/insurance/">Страхование</a></td>
<td><a href="/friends/">Друзья</a></td>
<td><a href="/internet-bank/">Интернет банк</a></td>
</tr>

</table>
</div>
</div>
</body>
</html>

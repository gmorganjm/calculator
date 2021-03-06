<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP CALCULATOR</title>
</head>

<body>
<style type="text/css">
#calculator_container
{
	height: 645px;
	width: 500px;

	background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6)); /* Chrome,Safari4+ */

	background: -webkit-linear-gradient(top,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* W3C */

	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */


	border-radius: 25px;
	-webkit-box-shadow: 0px 10px 30px -11px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 10px 30px -11px rgba(0,0,0,0.75);
	box-shadow: 0px 10px 30px -11px rgba(0,0,0,0.75);
}

#calculatorScreen
{
	height: 80px;
	width: 85%;
	display: block;
	margin: auto;
	position: relative;
	top: 35px;

	/* USED GRADIENT GENERATOR */
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#b8e1fc+0,a9d2f3+10,90bae4+25,90bcea+37,90bff0+50,6ba8e5+51,a2daf5+83,bdf3fd+100;Blue+Gloss+%231 */

	background: #b8e1fc; /* Old browsers */

	background: -moz-linear-gradient(top,  #b8e1fc 0%, #a9d2f3 10%, #90bae4 25%, #90bcea 37%, #90bff0 50%, #6ba8e5 51%, #a2daf5 83%, #bdf3fd 100%); /* FF3.6+ */

	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b8e1fc), color-stop(10%,#a9d2f3), color-stop(25%,#90bae4), color-stop(37%,#90bcea), color-stop(50%,#90bff0), color-stop(51%,#6ba8e5), color-stop(83%,#a2daf5), color-stop(100%,#bdf3fd)); /* Chrome,Safari4+ */

	background: -webkit-linear-gradient(top,  #b8e1fc 0%,#a9d2f3 10%,#90bae4 25%,#90bcea 37%,#90bff0 50%,#6ba8e5 51%,#a2daf5 83%,#bdf3fd 100%); /* Chrome10+,Safari5.1+ */

	background: -o-linear-gradient(top,  #b8e1fc 0%,#a9d2f3 10%,#90bae4 25%,#90bcea 37%,#90bff0 50%,#6ba8e5 51%,#a2daf5 83%,#bdf3fd 100%); /* Opera 11.10+ */

	background: -ms-linear-gradient(top,  #b8e1fc 0%,#a9d2f3 10%,#90bae4 25%,#90bcea 37%,#90bff0 50%,#6ba8e5 51%,#a2daf5 83%,#bdf3fd 100%); /* IE10+ */

	background: linear-gradient(to bottom,  #b8e1fc 0%,#a9d2f3 10%,#90bae4 25%,#90bcea 37%,#90bff0 50%,#6ba8e5 51%,#a2daf5 83%,#bdf3fd 100%); /* W3C */

	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b8e1fc', endColorstr='#bdf3fd',GradientType=0 ); /* IE6-9 */

	-webkit-box-shadow: inset 0px 10px 31px -15px rgba(0,0,0,0.75);
	-moz-box-shadow: inset 0px 10px 31px -15px rgba(0,0,0,0.75);
	box-shadow: inset 0px 10px 31px -15px rgba(0,0,0,0.75);
}

#text
{
	color: black;
	font:"Courier New", Courier, monospace;
	text-align: right;
	font-size: 65px;
	position: relative;
	top: 15px;
	margin-right: 20px;
	font-family:Digital-7;
}


.calcButtonOperator {
	-moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
	-webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
	box-shadow:inset 0px 1px 0px 0px #cf866c;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d0451b), color-stop(1, #bc3315));
	background:-moz-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-webkit-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-o-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-ms-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d0451b', endColorstr='#bc3315',GradientType=0);
	background-color:#d0451b;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #942911;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:28px;
	font-weight:bold;
	text-align: center;
	text-decoration:none;
	text-shadow:0px 1px 0px #854629;
	height: 80px;
	width: 80px;
}
.calcButtonOperator:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc3315), color-stop(1, #d0451b));
	background:-moz-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-webkit-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-o-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-ms-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc3315', endColorstr='#d0451b',GradientType=0);
	background-color:#bc3315;
}
.calcButtonOperator:active {
	position:relative;
	top:1px;
}

.calcButtonNum {
	-moz-box-shadow:inset 0px 1px 0px 0px #b3b3b3;
	-webkit-box-shadow:inset 0px 1px 0px 0px #b3b3b3;
	box-shadow:inset 0px 1px 0px 0px #b3b3b3;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d6d6d6), color-stop(1, #808080));
	background:-moz-linear-gradient(top, #d6d6d6 5%, #808080 100%);
	background:-webkit-linear-gradient(top, #d6d6d6 5%, #808080 100%);
	background:-o-linear-gradient(top, #d6d6d6 5%, #808080 100%);
	background:-ms-linear-gradient(top, #d6d6d6 5%, #808080 100%);
	background:linear-gradient(to bottom, #d6d6d6 5%, #808080 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d6d6d6', endColorstr='#808080',GradientType=0);
	background-color:#d6d6d6;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #757575;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:28px;
	font-weight:bold;
	text-decoration:none;
	text-shadow:0px 1px 0px #787878;
	height: 80px;
	width: 80px;
}
.calcButtonNum:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #808080), color-stop(1, #d6d6d6));
	background:-moz-linear-gradient(top, #808080 5%, #d6d6d6 100%);
	background:-webkit-linear-gradient(top, #808080 5%, #d6d6d6 100%);
	background:-o-linear-gradient(top, #808080 5%, #d6d6d6 100%);
	background:-ms-linear-gradient(top, #808080 5%, #d6d6d6 100%);
	background:linear-gradient(to bottom, #808080 5%, #d6d6d6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#808080', endColorstr='#d6d6d6',GradientType=0);
	background-color:#808080;
}
.calcButtonNum:active, .calcButtonEq:active {
	position:relative;
	top:1px;
}

.calcButtonEq {
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
	background-color:#007dc1;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:28px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
	height: 80px;
	width: 80px;
}
.calcButtonEq:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}
.calcButtonEq:active {
	position:relative;
	top:1px;
}



.buttons
{
	display: block;
	margin: auto;
	position: relative;
	top: 50px;
	width: 390px;
}

.buttons td
{
	padding: 7px;
}

#screen_form
{
	background: none;
	border: none;
	outline:none;
	color: black;
	font:"Courier New", Courier, monospace;
	text-align: right;
	font-size: 65px;
	position: relative;
	left: 30px;
	top: 15px;
	width: 90%;
	font-family:Digital-7;
}

}

</style>

<script type="text/javascript">
function concatToScreen(obj)
{
	var val = document.getElementById("screen_form").value;
	if (val.length < 13)
	{
		if (val == "0" || val == "OVERFLOW")
			 document.getElementById("screen_form").value = obj.innerHTML;
		else if (obj.innerHTML == "x")
			document.getElementById("screen_form").value = val.substr(0, val.length) + "*";
		else
			document.getElementById("screen_form").value = val.substr(0, val.length) + obj.innerHTML;
	}
	else
		document.getElementById("screen_form").value = "OVERFLOW";
}

function clearScreen()
{
	document.getElementById("screen_form").value = "0";
}

function del()
{
	var str = document.getElementById("screen_form").value;
	if (str != "0")
		document.getElementById("screen_form").value = str.substr(0, str.length - 1);


}

</script>


<div id="calculator_container">
<div id="calculatorScreen">
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<input name="calc" onfocus="this.value=''" onblur="if (this.value == ''){this.value='0';}"id="screen_form" value="<?php

//HANDLE HERE
if (isset($_GET['calc']))
{
	$string = $_GET['calc'];
	$haystackEnd;
	$haystackBegin;
	while ($haystackEnd = strstr($string, "--"))
	{
		$haystackBegin = strstr($string, "--", true);
		$string = substr($haystackBegin, 0, strlen($haystackBegin)) . "- " . substr($haystackEnd, 1, strlen($haystackEnd));
	}

	if(preg_match('/\/0/',$string,$matches))
	{
		echo "DIV BY ZERO";
	}
	else if(!preg_match("/^(\s*(-?[1-9]\d*(\.\d+)?)|(-?0(\.\d+)?))\s*([\+\-\/\*]\s*((-?[1-9]\d*(\.\d+)?)|(-?0(\.\d+)?))\s*)*$/",$string,$matches))
	{
		echo "Invalid Syntax";
	}
	else
		echo eval("return " . $string. ";");

}
else
	echo "0";
?>" type="text" />
</div>
<table class="buttons" style="position: relative; top: 55px; left: 0px;">
<tr>
<td><button type="button" class="calcButtonOperator" style="width: 175px;" onclick="del()">DEL</button></td>
<td><button type="button" class="calcButtonOperator" style="width: 175px;" onclick="clearScreen()">AC</button></td>
</tr>
</table>
<table class="buttons">
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">7</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">8</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">9</button></td>
<td><button type="button" class="calcButtonOperator" onclick="concatToScreen(this)">/</button></td>
</tr>
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">4</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">5</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">6</button></td>
<td><button type="button" class="calcButtonOperator" onclick="concatToScreen(this)">x</button></td>
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">1</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">2</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">3</button></td>
<td><button type="button" class="calcButtonOperator" onclick="concatToScreen(this)">-</button></td>
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">0</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">.</button></td>
<td><input type="submit" value="=" class="calcButtonEq" />
<td><button type="button" class="calcButtonOperator" onclick="concatToScreen(this)">+</button></td>
</tr>
</tr>
</tr>
</table>
</form>
</div>

</body>
</html>

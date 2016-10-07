<html>
<body>
<h1>Сумматор<h1><hr>
<form action="calc.php" method="GET">
<input type="text" name="arg1" value "">
<input type="text" name="arg2" value "">
<input type="submit" value="Сумма">
</form>
<php
	if(isset($_GET['arg1'])&& isset($_GET['arg2'])){
	echo intval($_GET['arg1'])+intval($_GET[arg2]);
	}
</body>
</html>
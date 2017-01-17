<!doctype html>
<html>

<head>
<title>CabinetTimer</title>
</head>

<body>

<?php
echo "内阁时间计算器";
echo "<br>";
echo "会议过程中不要关闭本窗口";
echo "<br>";
echo "<br>";
?>

<?php
include("getjstime.php")
?>

<form name="start" action="inbox.php"><br>
<input type="submit" name="start">
</form>

<?php
include("info.php")
?>


</body>
</html>
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

<!-- 展示13位JS样式时间戳 -->
<script type="text/javascript">
    var d=new Date();
    document.write("当前时间戳（13位）:  " + d.getTime());
    document.write("  把他记下来")
</script>

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
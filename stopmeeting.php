<html>
<body>

<?php
echo "<br>";
echo "----------stopmeeting.php----------";
echo "<br>";
?>

<form name="basic" method="post">
会议结束时间戳: <input type="text" name="stoptime"><br>
<input type="submit" name="结束">
</form>

<?php
$starttime=$_POST["stoptime"]; //应用$_POST[]全局变量获取表单元素文本框中的数值
if($_POST["submit"]="结束"){
    echo "本次分组会议结束的内阁时间为：".$_POST["stoptime"];
    echo "<br>";
}
?>

<?php
echo "<br>";
echo "----------stopmeeting.php----------";
echo "<br>";
?>

</body>
</html>
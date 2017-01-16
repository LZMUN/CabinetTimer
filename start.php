<html>
<head?
<body>

<?php
echo "<br>";
echo "----------start.php----------";
echo "<br>";
?>

//会议时间基本信息输入
<form name="basic" method="post">
会议开始时间戳: <input type="text" name="starttime"><br> 
时间转换比: <input type="text" name="startxxx"><br>
<input type="submit" name="开始" text="开始”>
</form>

<?php
$starttime=$_POST["starttime"]; //应用$_POST[]全局变量获取表单元素文本框中的数值
$startxxx=$_POST["startxxx"]; //应用$_POST[]全局变量获取表单元素文本框中的数值
if($_POST["submit"]="开始"){
    echo "本次分组会议开始的内阁时间为：".$_POST["starttime"];
    echo "<br>";
    echo "时间转换比为：".$_POST[startxxx];
    echo "<br>";
}
?>

<?php
echo "<br>";
echo "----------start.php----------";
echo "<br>";
?>

</body>
</head>
</html>
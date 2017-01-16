<!doctype html>
<html>
<body>

<?php
echo "内阁时间计算器";
echo "<br>";
echo "会议过程中不要关闭本窗口";
echo "<br>";
echo "<br>";
?>



<?php
include("clock.php")
?>

<form name="gettime" method="post"><br>
<input type="submit" name="get">
if($_POST["submit"="get"]){
    
}

<form name="start" action="inbox.php"><br>
<input type="submit" name="start">


<?php
include("info.php")
?>


</body>
</html>
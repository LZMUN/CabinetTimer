<html>
<head>

<form name=tett>
<input type=text name=tf value="time" size=15>
</form>

<script language=javascript>
var df = 100
var df = prompt(" 输入时间转换比 "); //获取输入的字符串
var df = parseInt(df); //将输入的字符串转化为数值
document.tett.tf.value = df; //将数值显示在输入框中

var starttime = prompt(" 输入开始的时间戳 "); //获取输入的字符串
var starttime = parseInt(starttime); //将输入的字符串转化为数值
document.text.tf.value = starttime; //将数值显示在输入框中
</script>

<script type="text/javascript">
var c=starttime
var t
function timedCount()
{
document.getElementById('txt').value=c
c=c+df
t=setTimeout("timedCount()",1000) //每1秒计算1次 1000毫秒为1秒
}
</script>
</head>

<body>

<form>
<input type="button" value="开始计时！" onClick="timedCount()">
<input type="text" id="txt">
</form>

<p>请点击上面的按钮。输入框会从 0 开始一直进行计时。</p>


</body>
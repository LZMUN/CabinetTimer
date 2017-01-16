<html>
<head>

<form name=tett>
<input type=text name=tf value="time" size=15>
</form>
<script language=javascript>
var df = prompt(" 输入开始的时间参数 ");
document.tett.tf.value = df;
</script>

<script type="text/javascript">
var c=0
var t
function timedCount()
{
document.getElementById('txt').value=c
c=c+df
t=setTimeout("timedCount()",1000)
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
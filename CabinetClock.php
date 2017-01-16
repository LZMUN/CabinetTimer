<html>
<head>

<p>内阁时钟显示器</p>
<p>！！会议过程中请不要关闭本窗口！！</p>
<form name=tett>
<input type=text name=timexxx value="time" size=10>
<input type=text name=start value="time2" size=10>
</form>

<script language=javascript>
var xxx = prompt(" 输入时间转换比 "); //获取输入的字符串
var xxx = parseInt(xxx); //将输入的字符串转化为数值
document.tett.timexxx.value = xxx; //将数值显示在输入框中

var starttime = prompt(" 输入开始的时间戳(刚才你记下来的） "); //获取输入的字符串
var starttime = parseInt(starttime); //将输入的字符串转化为数值
document.tett.start.value = starttime; //将数值显示在输入框中
</script>

<script type="text/javascript">
var c=starttime
var t
function timedCount()
{
document.getElementById('txt').value=c
c=c+xxx
t=setTimeout("timedCount()",1000) //每1秒计算1次 1000毫秒为1秒
}
</script>
</head>

<body>
<form>
<input type="button" value="开会啦！！" onClick="timedCount()">
<input type="text" id="txt">
</form>
<p>请点击上面的按钮。输入框会从 0 开始一直进行计时。</p>
<p>会议结束前，请重新记一次时间戳</p>
</body>

</head>
</html>
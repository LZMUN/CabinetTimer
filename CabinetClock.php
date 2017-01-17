<html>
<head>

<head>
    <title>CabinetTimer</title>
    <p>内阁时钟显示器</p>
    <p>！！会议过程中请不要关闭本窗口！！</p>
</head>

<form name=basic>
    <input type=text name=timeratiox value="ratio" size=5>
    <input type=text name=starttimex value="start" size=15>
</form>

<script language=javascript>
    var timeratio = prompt(" 输入时间转换比 "); //获取输入的转换比
    var timeratiox = parseInt(timeratio); //将输入的转换比转化为数值
    document.basic.timeratiox.value = timeratiox; //将转换比显示在输入框中
    var starttime = prompt(" 输入开始的时间戳(刚才你记下来的） "); //获取输入的初始时间戳
    var starttimex = parseInt(starttime); //将输入的初始时间戳转化为数值
    document.basic.starttimex.value = starttimex; //将初始时间戳显示在输入框中
</script>

<script type="text/javascript">
    var c=starttimex
    var t
    function timedCount()
    {
    document.getElementById('meetingtime').value=c
    timeratioc=timeratiox*1000 //js时间戳精确到毫秒
    c=c+timeratioc
    t=setTimeout("timedCount()",1000) //每1秒计算1次 1000毫秒为1秒
    }
</script>


</head>

<body>
<form>
    <input type="button" value="开会啦！！" onClick="timedCount()" size=10>
    <input type="text" id="meetingtime" size=20>
</form>

<p>请点击上面的按钮。输入框会从 0 开始一直进行计时</p>
<p>只能点一次！！！</p>
<p>会议结束前，请重新记一次时间戳</p>
</body>

<script language=javascript> //时间戳转换为时间
    var meetingtimex = meetingtime
    commonTime = meetingtimex.toLocaleString()
    document.getElementById('meetingtimex').value=c
</script>

<body>
    <form>
    <input type="text" id="meetingtime">
    </form>
</body>

</head>
</html>
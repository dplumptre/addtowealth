<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    .timer{
        padding-top: 40px;
        display: block;
    }
    .timer ul {
        list-style: none;
        display:block;
        clear: both;
    }
    .timer ul li{
        width: 12.5%;
        float:left;
        padding: 5px;
        border:1px solid #e0e2e5;
        display:block;
        border-radius: 4px;
    }
    .timer ul li span.head{
        display: block;
        text-align: center;
        color: #1976D2;
        font-weight: bold;
        font-size:16px;
        padding: 5px;
        border:1px solid #1976D2;
        text-transform: uppercase;
    }
    .timer ul li span.body{
        color: #3F51B5;
        margin-top: 3px;
        display: block;
        text-align: center;
        font-weight: bold;
        font-size: 30px;
        padding:8px;
        border:1px solid #1976D2;
    }
</style>
<body>

<div class="container">

    <?php
    $elapse_time = '2017-05-24 05:42:00';
    $now = \Carbon\Carbon::now()->addDays(4);
    ?>

    <p>Elapse Time: {{$elapse_time}}</p>
    <p>Now: {{$now}}</p>

        <div class="timer" id="clockdiv">
            <ul class="timer-list">
                <li>
                    <span class="head">Days</span>
                    <span class="body days"></span>
                </li>
                <li>
                    <span class="head">Hours</span>
                    <span class="body hours"></span>
                </li>
                <li>
                    <span class="head">Minutes</span>
                    <span class="body minutes"></span>
                </li>
                <li>
                    <span class="head">Seconds</span>
                    <span class="body seconds"></span>
                </li>

            </ul>
        </div>
        <div id="clockdiv2">
            <span class="days"></span>
            <span class="hours"></span>
            <span class="minutes"></span>
            <span class="seconds"></span>
        </div>

        <br>
        <br>
        <br>
        <br>
        <p id="demo" class="timer"></p>

</div>
</div>

<script src="/js/clock-countdown.js"></script>


<script>
    // Set the date we're counting down to
    let time = '{{$now}}'
    var countDownDate = new Date(time).getTime();

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("demo").innerHTML = ' <span class="label label-info">' + days + "d </span> "
            + ' <span class="label label-info">' + hours + "h </span> "
            + ' <span class="label label-info">' + minutes + "m </span> "
            + ' <span class="label label-info">' + seconds + "s </span> ";
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>
</html>
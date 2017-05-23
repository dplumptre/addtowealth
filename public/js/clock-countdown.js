function getTimeRemaining(endtime, starttime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / 1000 * 60 * 60) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));

    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    }
}


function initializeClock(id, endtime, starttime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
    var endtime = endtime;
    var starttime = starttime;

    function updateClock(e, s) {
        var t = getTimeRemaining(e, s);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = t.hours;
        minutesSpan.innerHTML = t.minutes;
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
            daysSpan.innerHTML = 0;
            hoursSpan.innerHTML = 0;
            minutesSpan.innerHTML = 0;
            secondsSpan.innerHTML = 0;
        }
    }

    updateClock(endtime, starttime);
    var timeinterval = setInterval(updateClock, 1000, endtime, starttime);
}

   var clock = setInterval(function (){

        var current_date = new Date();
        var year = current_date.getFullYear();
        var month = (current_date.getMonth()+1);
        var day = current_date.getDate();

        if(month < 10)
        {
            month = '0' + month;
        }

        if(day < 10)
        {
            day = '0' + day;
        }

        var hours = current_date.getHours();
        var minutes = current_date.getMinutes();
        var seconds = current_date.getSeconds();

        if(hours < 10)
        {
            hours = '0' + hours;
        }
        if(minutes < 10)
        {
            minutes = '0' + minutes;
        }

        if(seconds < 10)
        {
            seconds = '0' + seconds;
        }


        document.getElementById("year").innerHTML = year;
        document.getElementById("month").innerHTML = month;
        document.getElementById("day").innerHTML = day;

        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
    }, 1);
$(document).ready(function() {
    $("#can").attr({width: $(".canvas-holder").width()});

    $( window ).resize(function() {
        $("#can").attr({width: $(".canvas-holder").width()});
        drawChart();
    });
    drawChart();

    function drawLine(pointsStart, pointsEnd) {
        var canvas = document.getElementById("can");
        var ctx = canvas.getContext("2d");

        ctx.beginPath();
        ctx.setLineDash([2, 2]);
        ctx.strokeStyle = "#200c0a";
        ctx.lineWidth = 2;
        ctx.moveTo(pointsStart[0], pointsStart[1]);
        ctx.lineTo(pointsEnd[0], pointsEnd[1]);
        ctx.stroke();
    }

    function drawChart() {
        let canvas = $("#can");
        let width = canvas.width();
        let height = canvas.height();
        let points = [];
        let tableRows = $("tbody tr");

        for(let x = 0; x<tableRows.length; x++){
            let min = tableRows[x].getAttribute("data-min");
            let avg = tableRows[x].getAttribute("data-avg");
            let max = tableRows[x].getAttribute("data-max");
            points[x] = ((avg - min) / (max - min)) * 100;
        }

        $( ".chart-point:eq(0)" ).css({left: points[0]+"%" });
        for(let x = 1; x<tableRows.length; x++){
            drawLine([width*points[x]/100, 34+68*x], [width*(points[x-1]/100), 35+68*(x-1)]);
            $( ".chart-point:eq("+x+")" ).css({left: points[x]+"%" });
        }
    }
});
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
        let width = $("#can").width();
        let height = $("#can").height();
        let points = [30, 50, 45, 65, 60, 60, 75, 20, 100];

        for(let x = 0; x<9; x++){
            points[x] = Math.floor(Math.random()*100);
        }

        for(let x = 0; x<8; x++){
            drawLine([width*(points[x]/100), 35+68*x], [width*points[x+1]/100, 34+68*(x+1)]);
            $( ".chart-point:eq("+x+")" ).css({left: points[x]+"%" });
            if(x==7)$( ".chart-point:eq("+(x+1)+")" ).css({left: points[x+1]+"%" });
        }
    }
});
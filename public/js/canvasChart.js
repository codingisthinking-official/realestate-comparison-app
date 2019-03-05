$(document).ready(function () {
    $(".can").attr({width: $(".canvas-holder").width()});

    $(window).resize(function () {
        $(".can").attr({width: $(".canvas-holder").width()});
        drawChart();
    });
    drawChart();

    function drawLine(pointsStart, pointsEnd, canva) {
        let canvas = document.getElementsByClassName("can")[canva];
        let ctx = canvas.getContext("2d");

        console.log(pointsStart, pointsEnd, canva);

        ctx.beginPath();
        ctx.setLineDash([2, 2]);
        ctx.strokeStyle = "#200c0a";
        ctx.lineWidth = 2;
        ctx.moveTo(pointsStart[0], pointsStart[1]);
        ctx.lineTo(pointsEnd[0], pointsEnd[1]);
        ctx.stroke();
    }

    function drawChart() {
        let can = $(".can");
        for (let x = 0; x < can.length; x++) {
            let width =$(".can").width();
            let points = [];
            let tableRows = [...$(`.table-${x + 1} tbody tr`)];
            document.getElementsByClassName("can")[x].height = tableRows.length * 68;

            for (let y = 0; y < tableRows.length; y++) {
                let min = tableRows[y].getAttribute("data-min");
                let avg = tableRows[y].getAttribute("data-avg");
                let max = tableRows[y].getAttribute("data-max");
                points[y] = ((avg - min) / (max - min)) * 100;
            }

            $(tableRows[0]).find('.chart-point').css({left: points[0] + "%"});
            for (let y = 1; y < tableRows.length; y++) {
                console.log(width);
                drawLine([width * (points[y] / 100), 34 + 68 * y], [width * (points[y - 1] / 100), 35 + 68 * (y - 1)], x);
                $(tableRows[y]).find('.chart-point').css({left: points[y] + "%"});
            }
        }
    }

    $("#select-flat-type").change(function () {
        $(".chart").css("display", "none");
        let index = $("#select-flat-type").val();
        $(".table-" + index).css("display", "table");
    });
});
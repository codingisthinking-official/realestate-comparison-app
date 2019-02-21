$(document).ready(function() {
    function showTooltip() {
        $(this).next('.tooltip').fadeIn(300);
    }
    function hideTooltip() {
        $(this).next('.tooltip').fadeOut(300);
    }
    function getFormData(e) {
        e.preventDefault();
        $(this).addClass('unactive');
        let formData = {
            flatType: $('select[name="flat-type"]').val(),
            postalCode: $('input[name="postal-code"]').val(),
            price: parseInt($('input[name="rent"]').val()),
            area: parseInt($('input[name="area"]').val())
        }

        compareRent(e, formData);
    }
    function compareRent(e, formData) {
        e.preventDefault();

        let average = $(".average").data("avg");
        let min = $(".min-price span").data("min");
        let max = $(".max-price span").data("max");

        let price = Math.round( (formData.price / formData.area) * 10) / 10;
        $('.result .user-rent').text(price);


        $('.bar .your-result').text(`${price}zł`);

        if(price > average) {
            //cos tam
            let percent = ((average - min)*100/(max - min));
            let percentResult = ((price - min)*100/(max - min));
            if(percentResult < 0) percentResult = 0;
            if(percentResult > 100) percentResult = 100;

            $('.compared').removeClass('good');
            $('.compared').addClass('bad');
            $('.big-paragraph').html('Twój czynsz wypada drogo na tle innych. Dowiedz się dlaczego');
            $('.your-bar').css('width',percent+"%");
            $('.average').css('left', percent+"%");
            $('.your-result').css('left', percentResult+"%");
        }
        else if(average >= price) {
            //$('.bar .your-result').css('transform', 'translate(-50%, -50%)');
            let percent = ((price - min) / (max - min)) * 100;
            let percentAverage = ((average - min) / (max - min)) * 100;
            if(percent  <0) percent = 0;
            if(percent > max) percent = max;

            $('.compared').removeClass('bad');
            $('.compared').addClass('good');
            $('.big-paragraph').html('Twój czynsz wypada dobrze na tle innych.');
            $('.your-bar').css('width', percent+"%");
            $('.your-result').css('left', percent+"%");
            $('.average').css('left', percentAverage+"%");
        } 
        else {
            $('.big-paragraph').html('Wystąpił błąd');
        }

        $('.compared').slideDown();

        $('html, body').animate({
            scrollTop: $("#compared").offset().top
        }, 500);
    }
    function analyseRent(e) {
        e.preventDefault();
        $(this).addClass('unactive');
        
        $('.price-analysis').slideDown();

        $('html, body').animate({
            scrollTop: $("#price-analysis").offset().top
        }, 500);

        let analyseAverage = 4.5;
        let analyseUserRent = 6.2;
        let analyseMin = 1;
        let analyseMax = 8;

        let analyseAvgPercent = (analyseAverage/(analyseMax - analyseMin)) * 100;
        let analyseUserPercent = (analyseUserRent/(analyseMax - analyseMin)) * 100;
        if(analyseAvgPercent > 100) analyseAvgPercent = 100;
        if(analyseUserPercent > 100) analyseUserPercent = 100;
        if(analyseAvgPercent < 0) analyseAvgPercent = 0;
        if(analyseUserPercent < 0) analyseUserPercent = 0;

        $('.small-price-bar .average-bar').css('width', analyseAvgPercent + '%');
        $('.small-price-bar .average').css('left', analyseAvgPercent + '%');
        $('.small-price-bar .your-bar').css('width', analyseUserPercent + '%');
        $('.small-price-bar .your-result').css('left', analyseUserPercent + '%');

    }
    $('#analyse').click(analyseRent);
    $('#compare').click(getFormData);
    $('.info').hover(showTooltip, hideTooltip);
    
	$('.scroll-down').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 300);
        return false;
	});

});

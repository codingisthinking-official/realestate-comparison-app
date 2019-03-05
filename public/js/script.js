$(document).ready(function () {
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
        };

        // fetch('/flat/', {
        //     method: 'post',
        //     headers: {'Content-Type': 'application/json'},
        //     body: JSON.stringify(formData)
        // })
        //     .then(res => res.json());

        fetch('/get/' + formData.postalCode + '/' + formData.flatType, {
            method: 'GET',
            headers: {'Content-Type': 'application/json'},
        })
            .then(response => {
                if (response.status == 200) {
                    response.json()
                        .then(parsedReponse => {
                            if(parsedReponse.minPrice == 0){
                                $('.price-bar').hide();
                                $('.turnOff').html('Brak danych');
                                $('.big-paragraph').hide();
                            }
                            else {
                                setMinMaxAndAverageValues(parsedReponse);
                                $('.price-bar').show();
                                $('.turnOff').html('Brak danych');
                            }
                            compareRent(e, formData);
                        })
                        .catch(error => {
                            console.log("Brak danych dla tego kodu pocztowego.");
                        })
                }
            })
    }

    function setMinMaxAndAverageValues(parsedResponse) {
        $('.min-price span').attr('data-min', parsedResponse.minPrice).text(parsedResponse.minPrice.toFixed(2) + ' zł');
        $('.max-price span').attr('data-max', parsedResponse.maxPrice).text(parsedResponse.maxPrice.toFixed(2) + ' zł');
        $('.average').attr('data-avg', parsedResponse.avgPrice).text(parsedResponse.avgPrice.toFixed(2));

        console.log($('.min-price span').data('min'));
    }

    function compareRent(e, formData) {
        e.preventDefault();

        let average = $(".average").data("avg");
        let min = $(".min-price span").data("min");
        let max = $(".max-price span").data("max");

        let price = (formData.price / formData.area).toFixed(2);
        $('.result .user-rent').text(price);
        $('.avg-info').text(average.toFixed(2));

        $('.bar .your-result').text(`${price}`);

        if (price > average) {
            let percent = ((average - min) * 100 / (max - min));
            let percentResult = ((price - min) * 100 / (max - min));
            if (percentResult < 0) percentResult = 0;
            if (percentResult > 100) percentResult = 100;

            $('.compared').removeClass('good');
            $('.compared').addClass('bad');
            $('.big-paragraph').html('Twój czynsz wypada drogo na tle innych. Dowiedz się dlaczego');
            $('.your-bar').css('width', percent + "%");
            $('.average').css('left', percent + "%");
            $('.your-result').css('left', percentResult + "%");
        }
        else if (average >= price) {
            let percent = ((price - min) / (max - min)) * 100;
            let percentAverage = ((average - min) / (max - min)) * 100;
            if (percent < 0) percent = 0;
            if (percent > max) percent = max;

            $('.compared').removeClass('bad');
            $('.compared').addClass('good');
            $('.big-paragraph').html('Twój czynsz wypada dobrze na tle innych.');
            $('.your-bar').css('width', percent + "%");
            $('.your-result').css('left', percent + "%");
            $('.average').css('left', percentAverage + "%");
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
        let analyseMax = 10;

        let analyseAvgPercent = (analyseAverage / (analyseMax - analyseMin)) * 100;
        let analyseUserPercent = (analyseUserRent / (analyseMax - analyseMin)) * 100;
        if (analyseAvgPercent > 100) analyseAvgPercent = 100;
        if (analyseUserPercent > 100) analyseUserPercent = 100;
        if (analyseAvgPercent < 0) analyseAvgPercent = 0;
        if (analyseUserPercent < 0) analyseUserPercent = 0;

        $('.small-price-bar .average-bar').css('width', analyseAvgPercent + '%');
        $('.small-price-bar .average').css('left', analyseAvgPercent + '%');
        $('.small-price-bar .your-bar').css('width', analyseUserPercent + '%');
        $('.small-price-bar .your-result').css('left', analyseUserPercent + '%');

    }

    $('#analyse').click(analyseRent);
    $('#compare').click(getFormData);
    $('.info').hover(showTooltip, hideTooltip);

    $('.scroll-down').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 300);
        return false;
    });

    $('.description .button').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 300);
        return false;
    });
});

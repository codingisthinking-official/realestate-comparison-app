$(document).ready(function () {
    let uuid = create_UUID();

    $(".rateYo").rateYo({
        spacing: "3px",
        fullStar: true,
        numStars: 5,
        multiColor: {
            "startColor": "#FFBE00",
            "endColor"  : "#FFBE00"
        },
        normalFill: "#6B6B6B",
        ratedFill: "#6B6B6B",
        starWidth: '50px',
        onSet: function (rating, rateYoInstance) {
            $(this).parent().find('input[type=hidden]').val(rating);
        }
    });

    function showTooltip() {
        $(this).next('.tooltip').fadeIn(300);
    }

    function hideTooltip() {
        $(this).next('.tooltip').fadeOut(300);
    }

    function getFormData(e) {
        e.preventDefault();
        let formData = {
            flatType: $('select[name="flat-type"]').val(),
            postalCode: $('input[name="postal-code"]').val(),
            price: parseInt($('input[name="rent"]').val()),
            area: parseInt($('input[name="area"]').val()),
            uuid: uuid
        };

        if (!formData.flatType || !formData.postalCode || !formData.price || !formData.area) {
            $('.wrong-data').show();
        } else {
            $('.wrong-data').hide();
            $('#compare').addClass('unactive');
            $('#form').find('input').attr('disabled', 'disabled');
            $('#form').find('select').attr('disabled', 'disabled');


            fetch('/flat/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
                .then(res => res.json());

            $('#data-loader').css('display', 'flex');
            fetch('/flat/' + formData.postalCode + '/' + formData.flatType, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
                .then(response => {
                    if (response.status == 200) {
                        response.json()
                            .then(parsedReponse => {
                                if (parsedReponse.minPrice == 0) {
                                    $('.price-bar').hide();
                                    $('.turnOff').html('b/d');
                                    $('.big-paragraph').hide();
                                } else {
                                    setMinMaxAndAverageValues(parsedReponse);
                                    $('.price-bar').show();
                                }
                                compareRent(e, formData);
                                $('#data-loader').hide();
                            })
                            .catch(error => {
                            })
                    }
                });
        }
    }

    function setMinMaxAndAverageValues(parsedResponse) {
        $('.price-bar .min-price span').attr('data-min', parsedResponse.minPrice).text(parsedResponse.minPrice.toFixed(2) + ' zł');
        $('.price-bar .max-price span').attr('data-max', parsedResponse.maxPrice).text(parsedResponse.maxPrice.toFixed(2) + ' zł');
        $('.price-bar .average').attr('data-avg', parsedResponse.avgPrice).text(parsedResponse.avgPrice.toFixed(2));
    }

    function compareRent(e, formData) {
        e.preventDefault();

        let average = parseFloat($(".average").attr("data-avg"));
        let min = parseFloat($(".min-price span").attr("data-min"));
        let max = parseFloat($(".max-price span").attr("data-max"));

        let price = (formData.price / formData.area);
        $('.result .user-rent').text(price.toFixed(2));
        $('.avg-info').text(average.toFixed(2));

        $('.bar .your-result').text(`${price.toFixed(2)}`);

        let percent = ((average - min) * 100 / (max - min));
        let percentResult = ((price - min) * 100 / (max - min));
        if (percentResult < 0) percentResult = 0;
        if (percentResult > 100) percentResult = 100;

        if (price > average) {
            $('.compared').removeClass('good');
            $('.compared').addClass('bad');
            $('.big-paragraph').html('Twój czynsz wypada drogo na tle innych. Dowiedz się dlaczego');
            $('.compared .expensive').show();
        } else if (average >= price) {
            $('.compared').removeClass('bad');
            $('.compared').addClass('good');
            $('.big-paragraph').html('Twój czynsz wypada dobrze na tle innych. Możesz nadal skorzystać oczywiście z naszej szczegółowej porównywarki.');
            $('.compared .expensive').show();
        } else {
            $('.big-paragraph').html('Wystąpił błąd');
        }

        $('.your-bar').css('width', percent.toFixed(2) + "%");
        $('.average').css('left', percent.toFixed(2) + "%");
        $('.your-result').css('left', percentResult.toFixed(2) + "%");

        $('.compared').slideDown();

        $('html, body').animate({
            scrollTop: $("#compared").offset().top
        }, 500);
    }

    function analyseRent(e) {
        if (e) {
            e.preventDefault();
        }
        postFile();
        let formData = {
            flatType: $('select[name="flat-type"]').val(),
            postalCode: $('input[name="postal-code"]').val(),
            price: parseInt($('input[name="rent"]').val()),
            area: parseInt($('input[name="area"]').val())
        };

        var calculateEarnings = {};
        calculateEarnings.$elTotalSpace = $('#bill__building_space');
        calculateEarnings.$elPercentageOfHouse = $('#bill__udzial');
        calculateEarnings.$elAdministratorEarnings = $('#bill__oplata_administracja');

        calculateEarnings.changeAdministratorEarnings = function() {
            console.log(
                parseInt($('#bill__building_space').val()) / parseInt($('#bill__udzial').val())
            );
        };

        calculateEarnings.init = function() {
            calculateEarnings.$elTotalSpace.keyup(function() {
                calculateEarnings.changeAdministratorEarnings();
            });
            calculateEarnings.$elPercentageOfHouse.keyup(function() {
                calculateEarnings.changeAdministratorEarnings();
            });
        };

        calculateEarnings.init();

        if (!formData.flatType || !formData.postalCode || !formData.price || !formData.area) {
            $('.wrong-data').show();
        } else {
            $('.wrong-data').hide();
            $('#analyse').addClass('unactive');

            $('#compared').find('input').attr('disabled', 'disabled');
            $('#compared').find('select').attr('disabled', 'disabled');

            $('#data-loader').css('display', 'flex');
            fetch('/bills/' + formData.postalCode + '/' + formData.flatType, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                },
            }).then(response => {
                if (response.status == 200) {
                    response.json()
                        .then(parsedResponse => {
                            window.AVAILABLE_TAGS = parsedResponse;
                            parsedResponse.forEach(function(item) {
                                setPriceParameterValues(item);
                                calculateSmallChartsBarsLengths();
                            });

                            $('#data-loader').hide();
                            $('.price-analysis').slideDown();
                            $('html, body').animate({
                                scrollTop: $("#price-analysis").offset().top
                            }, 500);
                        });
                }
            });
        }
    }

    analyseRent();

    function setPriceParameterValues(item) {
        let smallContainer = $('#price-analysis .input-wrapper[data-billId="' + item.slug + '"]');

        if (!smallContainer) {
            throw "Could not found price item component for: " + item.slug;
        }

        if (item.min_price === item.max_price) {
            smallContainer.find('.small-price-bar').hide();
        } else {
            smallContainer.find('.small-price-bar').find('.min-price span').attr('data-min', item.min_price);
            smallContainer.find('.small-price-bar').find('.max-price span').attr('data-max', item.max_price);
            smallContainer.find('.small-price-bar').find('.average').attr('data-avg', item.avg_price);
        }
    }

    function postFile() {
        const files = document.querySelector('#addFile').files;
        const formData = new FormData();
        for (let i = 0; i < files.length; i++) {
            formData.append('file', files[i]);
        }

        fetch('/files/', {
            method: 'POST',
            headers: {
                'uuid': uuid
            },
            body: formData
        })
    }

    function postSmallFormData(e) {
        e.preventDefault();

        let elements = $('.price-analysis .input-wrapper:not(.empty)');
        let result = {
            'uuid': uuid,
            'flat_type': $('#form select[name="flat-type"]').val(),
            'post_code': $('#form input[name="postal-code"]').val(),
            'elements': []
        };

        elements.each(function (id) {
            let data = null;
            switch ($(this).parent().attr('data-type')) {
                case 'text':
                case 'chart':
                case 'rate':
                    data = {
                        'value': $(this).find('input').val(),
                        'key': $(this).attr('data-billid'),
                        'type': $(this).parent().attr('data-type')
                    };
                    break;
                case 'checkboxes':
                    let checked = [];
                    $(this).find('input[type=checkbox]:checked').each(function() {
                        checked.push($(this).val());
                    });
                    data = {
                        'value': checked.join(','),
                        'key': $(this).attr('data-billid'),
                        'type': $(this).parent().attr('data-type')
                    };
                    break;
                default:
                    throw "Unknown type : " + $(this).parent().attr('data-type');
            }

            result.elements.push(data);
        });

        $('#data-loader').css('display', 'flex');

        fetch('/bills/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(result)
        })
        .then(res => {
            addBillsItem();
            $('#data-loader').hide();
        });

        calculateSavings();
    }

    $('.file').change(addBillsItemList);

    function addBillsItemList() {
        let fileName = $(this).val();
        let id = null;
        for (let i = fileName.length - 1; i >= 0; i--) {
            if (fileName[i] == `\\` || fileName[i] == '/') {
                id = i;
                break;
            }
        }
        fileName = fileName.substr(id + 1);

        let itemTemplate = `<div class="bill-name"> ${fileName}<span class="delete"> usuń X</span></div>`;
        $('.added-files').append(itemTemplate);
        $('.label-button').hide();
        $('#addFile').hide();
    }

    $('#compared').on('click', '.delete', removeBillsItemList);

    function removeBillsItemList() {
        $(this).parent().remove();
        if ($('.added-files').children().length == 0 || document.querySelector('#addFile').files.length == 0) {
            $('.label-button').show();
        }
    }

    function addBillsItem() {
        let itemTemplate = `<div class="bill-name"> <a class="bill-name" href="./bill/${uuid}" target="_blank">podsumowanie_pdf</a></div>`;

        $('.pdf-show .bill-pdf').append(itemTemplate);
        $('.pdf-show').show();
    }

    function calculateSavings() {
        let monthlyDifference = 0;
        let elements = $('.price-analysis .small-price-bar');

        elements.each(function () {
            let avg = $(this).find('.average').attr('data-avg');
            avg = parseFloat(avg);
            let result = $(this).find('.your-result').attr('data-result');
            result = parseFloat(result);
            let diff = result - avg;

            monthlyDifference += diff;
        });

        (monthlyDifference * 12 > 0) ? $('.savings').show() : $('.savings').hide();
        $('.saving-amount').text((monthlyDifference * 12).toFixed(2));
    }

    function addUserBill() {
        let val = $(this).val();
        $(this).siblings('.small-price-bar').find('.your-result').attr('data-result', val);

        calculateSmallChartsBarsLengths();
    }

    function create_UUID() {
        var dt = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = (dt + Math.random() * 16) % 16 | 0;
            dt = Math.floor(dt / 16);
            return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
        return uuid;
    }

    function calculateSmallChartsBarsLengths() {
        let charts = $('.small-price-bar');
        charts.each(function () {
            let minPriceAttr = $(this).find('.min-price span').attr('data-min');
            let minPrice = parseFloat(minPriceAttr).toFixed(2);
            let maxPriceAttr = $(this).find('.max-price span').attr('data-max');
            let maxPrice = parseFloat(maxPriceAttr).toFixed(2);
            let avgPriceAttr = $(this).find('.average').attr('data-avg');
            let avgPrice = parseFloat(avgPriceAttr).toFixed(2);
            let userResultAttr = $(this).find('.your-result').attr('data-result');
            let userPrice = parseFloat(userResultAttr).toFixed(2);

            $(this).find('.min-price span').text(minPrice + ' zł');
            $(this).find('.max-price span').text(maxPrice + ' zł');
            $(this).find('.average').text(avgPrice + ' zł');
            $(this).find('.your-result').text(userPrice + ' zł');

            let avgLength = ((avgPrice - minPrice) / (maxPrice - minPrice)) * 100;
            avgLength = parseFloat(avgLength);
            let userBarLength = ((userPrice - minPrice) / (maxPrice - minPrice)) * 100;
            userBarLength = parseFloat(userBarLength);

            if (avgLength <= 0) {
                avgLength = 0;
            }

            if (avgLength >= 100) {
                avgLength = 100;
            }

            if (userBarLength <= 0) {
                userBarLength = 0;
            }

            if (userBarLength >= 100) {
                userBarLength = 100;
            }

            $(this).find('.average-bar').css('width', `${avgLength.toFixed(2)}%`);
            $(this).find('.average').css('left', `${avgLength.toFixed(2)}%`);
            $(this).find('.your-bar').css('width', `${userBarLength.toFixed(2)}%`);
            $(this).find('.your-result').css('left', `${userBarLength.toFixed(2)}%`);

            if (avgLength > userBarLength) {
                $(this).find('.average-bar').css('z-index', '9');
                $(this).find('.your-bar').css('z-index', '99');
            } else if (userBarLength > avgLength) {
                $(this).find('.average-bar').css('z-index', '99');
                $(this).find('.your-bar').css('z-index', '9');
            }
        });
    }

    function isFileLoaded() {
        if ($('.added-files').children().length == 0) {
            $('.no-file-added').show();
            return false;
        } else {
            $('.no-file-added').hide();
            return true;
        }
    }

    function isDataTyped() {
        let inputWrappers = $('#price-analysis .input-wrapper');
        let full = true;
        let wrongInputs = [];

        inputWrappers.each(function () {
            if ($(this).find('input[required]').length && $(this).find('input[required]').val().trim() == '') {
                full = false;
                wrongInputs.push($(this));
            }
        });

        if (wrongInputs.length > 0) {
            $([document.documentElement, document.body]).animate({
                scrollTop: wrongInputs[0].offset().top - 40
            }, 2000);
        }

        return full;
    }

    $('#compare').click(getFormData);
    $('#main-form').submit(getFormData);
    $('#analyse').click(function (e) {
        let okay = isFileLoaded();
        if (okay) analyseRent(e);
    });
    $('#export').click(function (e) {
        let okay = isDataTyped();
        if (okay) {
            postSmallFormData(e);
            $('.empty-inputs').hide();
            $('#export').addClass('unactive');
            $('#price-analysis').find('input').attr('disabled', 'disabled');
            $('#price-analysis').find('select').attr('disabled', 'disabled');
        } else $('.empty-inputs').show();
    });

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

    $('.price-analysis .input-wrapper input').change(addUserBill);
});
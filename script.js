// РАБОТА HEADER

const currentLocation = window.location.href;
const menuItems = document.querySelectorAll('.header a');
menuItems.forEach(item => {
    if (item.href === currentLocation) {
        item.parentElement.classList.add('active');
    }
});

// Работа калькулятора

$(function() {
    $("#deposit-slider").slider({
        range: "min",
        value: 10000,
        min: 1000,
        max: 3000000,
        step: 1000,
        slide: function(event, ui) {
            $("#input1").val(ui.value);
        }
    });
    $("#input1").val($("#deposit-slider").slider("value"));

    $("#replenishment-slider").slider({
        range: "min",
        value: 10000,
        min: 1000,
        max: 3000000,
        step: 1000,
        slide: function(event, ui) {
            $("#input2").val(ui.value);
        }
    });
    $("#input2").val($("#replenishment-slider").slider("value"));

    $("#input1").on("input", function() {
        var value = this.value ? parseInt(this.value, 10) : 0;
        if (value >= 1000 && value <= 3000000 && !isNaN(value)) {
            $("#deposit-slider").slider("value", value);
        } else if (value < 1000) {
            $("#deposit-slider").slider("value", 1000);
            $(this).val(1000);
        } else if (value > 3000000) {
            $("#deposit-slider").slider("value", 3000000);
            $(this).val(3000000);
        }
    });

    $("#input2").on("input", function() {
        var value = this.value ? parseInt(this.value, 10) : 0;
        if (value >= 1000 && value <= 3000000 && !isNaN(value)) {
            $("#replenishment-slider").slider("value", value);
        } else if (value < 1000) {
            $("#replenishment-slider").slider("value", 1000);
            $(this).val(1000);
        } else if (value > 3000000) {
            $("#replenishment-slider").slider("value", 3000000);
            $(this).val(3000000);
        }
    });
});

$(document).ready(function() {
    $('.calc_button').click(function(e) {
        e.preventDefault();

        var depositAmount = $('#input1').val().replace(/\s+/g, '');
        var termYears = $('.calc_input option:selected').val().replace(' год', '');
        var replenishment = $('input[name="replenishment"]:checked').val();
        var replenishmentAmount = $('#input2').val().replace(/\s+/g, '');

        $.ajax({
            type: 'POST',
            url: 'calc.php',
            data: {
                deposit_amount: depositAmount,
                term_years: termYears,
                replenishment: replenishment,
                replenishment_amount: replenishmentAmount
            },
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status === 'success') {
                    $('.calc_result').html('Результат: ' + data.total_amount + ' руб.');
                } else {
                    $('.calc_result').html('Ошибка: ' + data.message);
                }
            },
            error: function() {
                $('.calc_result').html('Ошибка отправки данных.');
            }
        });
    });
});
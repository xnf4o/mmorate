function world_click(link) {
    window.location.href = link;
}

toastr.options = {
    escapeHtml: true,
    closeButton: true,
    closeHtml: '<button></button>',
    showDuration: "5000",
    hideDuration: "1000",
    closeDuration: "300",
    timeOut: "5000",
    extendedTimeOut: "5000",
    newestOnTop: true,
    showEasing: 'swing', /*easeOutBounce*/
    hideEasing: 'linear', /*easeInBack*/
    closeEasing: 'linear', /*easeInBack*/
    showMethod: 'slideDown', /*fadeIn, show*/
    hideMethod: 'slideUp', /*fadeOut, hide*/
    closeMethod: 'slideUp',
    preventDuplicates: true,
    progressBar: false,
    rtl: false,
    positionClass: "toast-bottom-center",
}

$(document).ready(function () {
    $('textarea:not(".g-recaptcha-response")').wysibb({
        lang: 'ru',
    });
    // Таймер до нового голоса
    const out = $('#timeleft');
    if (out.length != 0) {
        const fullday = 24 * 3600e3;
        const tzdiff = new Date().getTimezoneOffset() * 60e3;

        let timer = () => {
            let diff = fullday - (Date.now() - tzdiff) % fullday

            if (diff <= 0) return clearInterval(i); // Конец
            diff /= 1e3; // мс -> с
            out.innerText = [
                diff / 3600 % 24 | 0, // hours
                diff / 60 % 60 | 0, // minutes
                diff / 1 % 60 | 0  // seconds
            ].map(d => d < 10 ? '0' + d : d).join(':');
        };

        let i = setInterval(timer, 450);
        timer();
    }
    // Отправка почты
    $('#sendEmBtn').on('click', function (e) {
        e.preventDefault();
        const email = $('#mail').val();
        $.ajax({
            type: "POST",
            url: '/profile/sendEmailCode',
            data: {email: email},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                $('#form-1').hide();
                $('#mes-1').show();
            },
            error: function () {
                toastr["warning"]("Данный EMAIL уже используется.", "Ошибка")
            }
        });
    });
    // Подтверждение почты
    $('#accEmBtn').on('click', function (e) {
        e.preventDefault();
        const code = $('#code').val();
        if (code == null || code == '') {
            $('#code').addClass('error-input');
            setTimeout(function () {
                $('#code').removeClass('error-input');
            }, 1000);
            toastr["warning"]("Введите код.", "Ошибка")
            return false;
        }
        $.ajax({
            type: "POST",
            url: '/profile/verifyEmail',
            data: {code: code},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                $('#form-3').hide();
                $('#mes-3').show();
                setTimeout(function () {
                    $('#emblck').html('');
                }, 3000);
            },
            error: function (request, status, error) {
                $('#code').addClass('error-input');
                setTimeout(function () {
                    $('#code').removeClass('error-input');
                }, 1000);
                toastr["warning"]("Введен неверный код.", "Ошибка")
            }
        });
    });

    $('#ipLog').on('change', function () {
        $.ajax({
            type: "POST",
            url: '/ping',
            data: {ip: $(this).val()},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.errors) {
                    $('#ipLogSpan').removeClass('success').addClass('error').html(response.errors);
                } else {
                    $('#ipLogSpan').removeClass('error').addClass('success').html(response.data);
                }
            }
        });
    });

    $('#ipGame').on('change', function () {
        $.ajax({
            type: "POST",
            url: '/ping',
            data: {ip: $(this).val()},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.errors) {
                    $('#ipGameSpan').removeClass('success').addClass('error').html(response.errors);
                } else {
                    $('#ipGameSpan').removeClass('error').addClass('success').html(response.data);
                }
            }
        });
    });

    // Отправка sms
    $('#sendSmsBtn').on('click', function (e) {
        e.preventDefault();
        const phone = $('#phone').val();
        $.ajax({
            type: "POST",
            url: '/profile/sendSmsCode',
            data: {phone: phone},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                $('#form-2').hide();
                $('#mes-2').show();
            },
            error: function () {
                toastr["warning"]("Данный телефон уже используется.", "Ошибка")
            }
        });
    });
    // Подтверждение sms
    $('#accSmsBtn').on('click', function (e) {
        e.preventDefault();
        const code = $('#smsCode').val();
        if (code == null || code == '') {
            $('#smsCode').addClass('error-input');
            setTimeout(function () {
                $('#smsCode').removeClass('error-input');
            }, 1000);
            return false;
        }
        $.ajax({
            type: "POST",
            url: '/profile/verifySms',
            data: {code: code},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                $('#form-4').hide();
                $('#mes-4').show();
                setTimeout(function () {
                    $('#phnblck').html('');
                }, 3000);
            },
            error: function (request, status, error) {
                $('#smsCode').addClass('error-input');
                setTimeout(function () {
                    $('#smsCode').removeClass('error-input');
                }, 1000);
                toastr["warning"]("Введен неверный код.", "Ошибка")
            }
        });
    });


    // $("#phone").mask("+9(999) 999-99-99");
    // fuckAdBlock.onDetected(function () {
    //     $('#ad').val('1')
    // });
    // fuckAdBlock.onNotDetected(function () {
    //     $('#ad').val('0')
    // });
    $('#file-1').on("change", function () {
        $('#updateAvatar').submit();
    });
    if (document.getElementById('created') != null) $('#created').ionDatePicker({
        lang: "ru",
        sundayFirst: false,
        years: "80",
        format: "DD.MM.YYYY"
    });
    if (document.getElementById('bday') != null) $('#bday').ionDatePicker({
        lang: "ru",
        sundayFirst: false,
        years: "80",
        format: "DD.MM.YYYY"
    });
    $("#check-3").change(function () {
        return $("#vote_description").toggle()
    });

    const leftHeight = $('.contentLeft').height();
    const rightHeight = $('.contentRight').height();

    if (leftHeight > rightHeight) {
        $('.contentRight').css('min-height', leftHeight + 'px');
    } else {
        $('.contentLeft').css('min-height', rightHeight + 'px');
    }


    const maxValueBet = 10;
    $("#slider").slider({
        value: 0, //Значение, которое будет выставлено слайдеру при загрузке
        min: 0, //Минимально возможное значение на ползунке
        max: maxValueBet, //Максимально возможное значение на ползунке
        step: 0.1, //Шаг, с которым будет двигаться ползунок
        create: function (event, ui) {
            val = $("#slider").slider("value"); //При создании слайдера, получаем его значение в перемен. val
            $("#contentSlider").html(val); //Заполняем этим значением элемент с id contentSlider
            $("#ratingComment").val(val); //Заполняем этим значением элемент с id contentSlider
        },
        slide: function (event, ui) {

            $("#ratingComment").val(ui.value * 10); //При изменении значения ползунка заполняем элемент с id contentSlider
            $("#contentSlider").html(ui.value); //При изменении значения ползунка заполняем элемент с id contentSlider
        }
    });

    // /*График переходов*/
    //     const MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    //     let config = {
    //         type: 'line',
    //         data: {
    //             labels: ["January", "February", "March", "April", "May", "June", "July"],
    //             datasets: [{
    //                 label: "Price",
    //                 backgroundColor: "#6f5c4f",
    //                 borderColor: "#6f5c4f",
    //                 data: [
    //                     12,
    //                     24,
    //                     25,
    //                     34,
    //                     12,
    //                     22,
    //                     29
    //                 ],
    //                 fill: false,
    //
    //
    //
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             title:{
    //                 display:true,
    //                 text:'Переходы за последний месяц'
    //             },
    //             tooltips: {
    //                 mode: 'index',
    //                 intersect: false,
    //             },
    //             hover: {
    //                 mode: 'nearest',
    //                 intersect: true
    //             },
    //
    //         }
    //     };
    //
    //
    //
    //     window.onload = function() {
    //         let ctx = document.getElementById("graphick").getContext("2d");
    //         window.myLine = new Chart(ctx, config);
    //     };
    //
    //
    //
    //
    //
    //
    //
    //   /*График голосованй*/
    //
    //     const MONTHS2 = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    //         let config2 = {
    //         type: 'line',
    //         data: {
    //             labels: ["January", "February", "March", "April", "May", "June", "July"],
    //             datasets: [{
    //                 label: "Price",
    //                 backgroundColor: "#6f5c4f",
    //                 borderColor: "#6f5c4f",
    //                 data: [
    //                     12,
    //                     14,
    //                     25,
    //                     34,
    //                     52,
    //                     22,
    //                     39
    //                 ],
    //                 fill: false,
    //
    //
    //
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             title:{
    //                 display:true,
    //                 text:'Голосований за последний месяц'
    //             },
    //             tooltips: {
    //                 mode: 'index',
    //                 intersect: false,
    //             },
    //             hover: {
    //                 mode: 'nearest',
    //                 intersect: true
    //             },
    //
    //         }
    //         };
    //
    //         let ctx2 = document.getElementById("graphick2").getContext("2d");
    //         window.myLine = new Chart(ctx2, config2);
    //         $('#graphick2').hide();
    //
    //
    //
    //
    //     $('#tabGol').click(function(){
    //          $('.itemTabGraphick').removeClass('activeStat');
    //         $(this).addClass('activeStat');
    //
    //         $('#graphick2').show();
    //         $('#graphick').hide();
    //     });
    //     $('#tabPere').click(function(){
    //         $('.itemTabGraphick').removeClass('activeStat');
    //         $(this).addClass('activeStat');
    //
    //         $('#graphick2').hide();
    //         $('#graphick').show();
    //     });
    $('a').click(function (e) {
        var link = $(this).attr('href').prop('hostname');
        var siteUrl = window.location.hostname;
        var regex = /^([a-z0-9]{1,})./gi;
        var CurrSubDomain = regex.exec(siteUrl);
        var NewSubDomain = regex.exec(link);
        console.log('curr ' . CurrSubDomain);
        console.log('new ' . NewSubDomain);
        if(CurrSubDomain !== NewSubDomain) {
            e.preventDefault();
            $(document.body).load(link);
            $(document.head).load(link);
            if (link !== location.href) {
                window.history.pushState({path: link}, '', link);
            }
        }
        return false;
    });

});

$(document).ready(function(){
    let out = document.getElementById('timeleft');
    if (out != null){
        let timer = () => {
            let diff = 864e5 - (Date.now() - new Date().getTimezoneOffset()*60e3) % 864e5;
            if (diff <= 0) return clearInterval(i);
            diff /= 1e3;
            out.innerText = [
                diff / 3600 % 24 |0,
                diff / 60 % 60   |0,
                diff % 60    |0
            ].map(d => d < 10 ? '0' + d : d).join(':');
        };

        let i = setInterval(timer, 450);
        timer();
    }
    $('#file-1').on("change", function(){ $('#updateAvatar').submit(); });
    if(document.getElementById('created') != null) $('#created').ionDatePicker();
    $("#check-3").change(function(){
        return $("#vote_description").toggle()
    });

	const leftHeight = $('.contentLeft').height();
	const rightHeight = $('.contentRight').height();

	if(leftHeight > rightHeight){
		$('.contentRight').css('min-height',leftHeight +'px');
	}else{
		$('.contentLeft').css('min-height',rightHeight +'px');
	}
	

	const maxValueBet = 10;
    $("#slider").slider({
        value: 0, //Значение, которое будет выставлено слайдеру при загрузке
        min: 0, //Минимально возможное значение на ползунке
        max: maxValueBet, //Максимально возможное значение на ползунке
        step: 0.1, //Шаг, с которым будет двигаться ползунок
        create: function(event, ui) {
            val = $("#slider").slider("value"); //При создании слайдера, получаем его значение в перемен. val
            $("#contentSlider").html(val); //Заполняем этим значением элемент с id contentSlider
            $("#ratingComment").val(val); //Заполняем этим значением элемент с id contentSlider
        },
        slide: function(event, ui) {

            $("#ratingComment").val(ui.value*10); //При изменении значения ползунка заполняем элемент с id contentSlider
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

});

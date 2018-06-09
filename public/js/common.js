function ping(ip, callback) {

    if (!this.inUse) {
        this.status = 'unchecked';
        this.inUse = true;
        this.callback = callback;
        this.ip = ip;
        var _that = this;
        this.img = new Image();
        this.img.onload = function () {
            _that.inUse = false;
            _that.callback('responded');

        };
        this.img.onerror = function (e) {
            if (_that.inUse) {
                _that.inUse = false;
                _that.callback('responded', e);
            }

        };
        this.start = new Date().getTime();
        this.img.src = "http://" + ip;
        this.timer = setTimeout(function () {
            if (_that.inUse) {
                _that.inUse = false;
                _that.callback('timeout');
            }
        }, 1500);
    }
}
var PingModel = function (servers) {
    var self = this;
    var myServers = [];
    ko.utils.arrayForEach(servers, function (location) {
        myServers.push({
            name: location,
            status: ko.observable('unchecked')
        });
    });
    self.servers = ko.observableArray(myServers);
    ko.utils.arrayForEach(self.servers(), function (s) {
        s.status('checking');
        new ping(s.name, function (status, e) {
            s.status(status);
        });
    });
};

$(document).ready(function(){
    $('#created').ionDatePicker();
    $("#check-3").change(function(){
        return $("#vote_description").toggle()
    });

	var leftHeight = $('.contentLeft').height();
	var rightHeight = $('.contentRight').height();

	if(leftHeight > rightHeight){
		$('.contentRight').css('min-height',leftHeight +'px');
	}else{
		$('.contentLeft').css('min-height',rightHeight +'px');
	}
	

	var maxValueBet = 10;
    var widthLine;
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

    /*График переходов*/
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Price",
                    backgroundColor: "#6f5c4f",
                    borderColor: "#6f5c4f",
                    data: [
                        12,
                        24,
                        25,
                        34,
                        12,
                        22,
                        29
                    ],
                    fill: false,
               
                    
                    
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Переходы за последний месяц'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
              
            }
        };
       

      
        window.onload = function() {
            var ctx = document.getElementById("graphick").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };
        




       

      /*График голосованй*/
        
        var MONTHS2 = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var config2 = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Price",
                    backgroundColor: "#6f5c4f",
                    borderColor: "#6f5c4f",
                    data: [
                        12,
                        14,
                        25,
                        34,
                        52,
                        22,
                        39
                    ],
                    fill: false,
               
                    
                    
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Голосований за последний месяц'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
              
            }
            };
            
            var ctx2 = document.getElementById("graphick2").getContext("2d");
            window.myLine = new Chart(ctx2, config2);
            $('#graphick2').hide();




        $('#tabGol').click(function(){
             $('.itemTabGraphick').removeClass('activeStat');
            $(this).addClass('activeStat');
           
            $('#graphick2').show();
            $('#graphick').hide();
        });
        $('#tabPere').click(function(){
            $('.itemTabGraphick').removeClass('activeStat');
            $(this).addClass('activeStat');

            $('#graphick2').hide();
            $('#graphick').show();
        });

});

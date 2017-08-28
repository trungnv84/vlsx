(function($){
    var ts = (new Date()).getTime() + 9*24*60*60*1000;
    
    $('#countdown645').countdown({
        timestamp   : ts,
        callback	: function(days, hours, minutes, seconds){}
    });
})(jQuery);
$( ".menu-btn, .menu-box-btn" ).click(function() {
    var thiss = this;
    if(!$(thiss).hasClass('wait')) {
        $( ".menu" ).toggleClass("menu-visible");    
        $(thiss).addClass('wait');
        var animationDuration = 2000;
        setTimeout(function(){$(thiss).removeClass('wait')}, animationDuration);
    }
});
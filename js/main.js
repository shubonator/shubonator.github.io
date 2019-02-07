$( ".menu-btn, .menu-box-btn" ).click(function() {
    $( ".menu" ).toggleClass("menu-visible");
    $( ".menu-box-content" ).toggleClass("menu-box-content-visible");
    $( ".menu-box-content-1" ).toggleClass("visible1");
    $( ".menu-box-content-2" ).toggleClass("visible2");
    $( ".menu-box-content-3" ).toggleClass("visible3");
    $( ".menu-box-content-4" ).toggleClass("visible4");
    
  });
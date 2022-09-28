$(function () {
    // hide all panels by default
    $('.panel').hide();
    
    // on accordion click
    $('.accordion').click(function () {
        // record if it was active
        var wasActive = $(this).hasClass('active');
        // if not 
        if (!wasActive) {
            // hide all
            $('.panel').slideUp();
            $(this).next('.panel').slideDown();
            // deactivate all 
            $('.accordion').removeClass('active');
            // activate selected accordion
            $(this).addClass('active');
        }else{
            // hide selected panel
            $(this).next('.panel').slideUp();
            // deactivate selected accordion
            $(this).removeClass('active');
        }
    });
});
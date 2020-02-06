$(document).ready(function() {
    // function for enabling scrolling when the donw button is clicked 
    $('#scroll_btn').click(function() {
        $('body,html').css('overflow','visible');
    });
    //  transition delay function for the top 'close' button
    $("#box").change( function(){
        $('#cls').delay(0).toggleClass('hide');
        $('.navigation-container').toggleClass('bg');
        $('.menu').toggleClass('hide');
    });
    // logic + transition for the hamburger nav button 
    $('#cls').click(function() {
        $('#nav-btn > input').prop("checked", false);
        $('#cls').delay(0).toggleClass('hide');
        $('.navigation-container').toggleClass('bg');
        $('.menu').toggleClass('hide');
    });
});
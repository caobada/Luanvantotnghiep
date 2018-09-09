$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $(".img-hot").hover(function(){
        $(this).find('.describe').slideToggle();
    });
})
$(window).on('scroll', function () {
    if ($(window).scrollTop() >= 180) {
        $('#about-us-img-container').show(1000);
    }
});


$('.offer-container-item').on('mouseenter',function () {
    $(this).find('.offer-container-item-img').css({'transform': 'scale(1.2)'});
    $(':nth-child(1)', this).fadeOut(200);
    $(':nth-child(3)', this).css({'background-color': 'rgba(0,0,0,.8)'});
    $(':nth-child(5)', this).slideDown();
    $(':nth-child(4)', this).css({'color': '#ff6035'});
    console.log($(':nth-child(2)',this));
    
});
$('.offer-container-item').on('mouseleave',function () {
    $(this).find('.offer-container-item-img').css({'transform': 'scale(1)'});
    $(':nth-child(1)', this).fadeIn(200);
    $(':nth-child(3)', this).css({'background-color': 'rgba(0,0,0,.4)'});
    $(':nth-child(5)', this).slideUp();
    $(':nth-child(4)', this).css({'color': '#fff'});
});
$('#footer-up-button').on('mouseenter', function () {
   $(this).css({'box-shadow': '0px 0px 20px #999999'}); 
});
$('#footer-up-button').on('mouseleave', function () {
    $(this).css({'box-shadow': '0px 0px 0 #999999'}); 
 });
 $('#footer-up-button').on('click', function () {
    $('body,html').animate({scrollTop: 0}, 400); 
 });
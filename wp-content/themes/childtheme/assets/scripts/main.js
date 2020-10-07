$(document).ready(function() {
    console.log('tjenamoss');

    $('#button1').on('click', function(e) {
        $('#image2').fadeOut();
        $('#image3').fadeOut();
        $('#text2').fadeOut();
        $('#text3').fadeOut();
        $('#title2').fadeOut();
        $('#title3').fadeOut();

        $('#image1').fadeIn();
        $('#text1').fadeIn();
        $('#title1').fadeIn();
    });

    $('#button2').on('click', function(e) {
        $('#image1').fadeOut();
        $('#image3').fadeOut();
        $('#text1').fadeOut();
        $('#text3').fadeOut();
        $('#title1').fadeOut();
        $('#title3').fadeOut();

        $('#image2').fadeIn();
        $('#text2').fadeIn();
        $('#title2').fadeIn();
    });

    $('#button3').on('click', function(e) {
        $('#image1').fadeOut();
        $('#image2').fadeOut();
        $('#text1').fadeOut();
        $('#text2').fadeOut();
        $('#title1').fadeOut();
        $('#title2').fadeOut();

        $('#image3').fadeIn();
        $('#text3').fadeIn();
        $('#title3').fadeIn();
    });
    
});
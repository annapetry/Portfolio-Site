$(document).ready(function () {

    $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.smallheader').fadeIn();
    } else {
        $('.smallheader').fadeOut(300);
    }
    });
    //rollover swap images with rel 
    var img_src = "";
    var new_src = "";

    $(".rollover").hover(function () {
            //mouseover   
            img_src = $(this).attr('src'); //grab original image 
            new_src = $(this).attr('rel'); //grab rollover image 
            $(this).attr('src', new_src); //swap images 
            $(this).attr('rel', img_src); //swap images   
        },
        function () { //mouse out   
            $(this).attr('src', img_src); //swap images 
            $(this).attr('rel', new_src); //swap images 
        });

    //preload images 
    var cache = new Array(); //cycle through all rollover elements and add rollover img src to cache array 
    $(".rollover").each(function () {
        var cacheImage = document.createElement('img');
        cacheImage.src = $(this).attr('rel');
        cache.push(cacheImage);
    });

    if ($(window).width() > 1155){
        $(".feature").hover(function () {
            $('.img-feature').show();
        },
        function () {
            $('.img-feature').hide();
        });

        $(".img1").hover(function () {
            $('.img1-text').show();
        },
        function () {
            $('.img1-text').hide();
        });

        $(".img2").hover(function () {
            $('.img2-text').show();
        },
        function () {
            $('.img2-text').hide();
        });

        $(".img3").hover(function () {
            $('.img3-text').show();
        },
        function () {
            $('.img3-text').hide();
        });
    };



})
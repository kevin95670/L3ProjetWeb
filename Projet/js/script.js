$(document).ready(function() {
	
    var tailleBody = $('body').height();
    //console.log(tailleBody);
    var tailleHeader = $('header').height();
    //console.log(tailleHeader);
    var tailleFooter = $('footer').height();
    //console.log(tailleFooter);
    var tailleMainContent = (tailleBody - 40) - (tailleHeader + tailleFooter);
    //console.log(tailleMainContent);
    $('.main-content').css("min-height", tailleMainContent);
    $('aside').css("min-height", tailleMainContent);

    $(window).on('resize', function() {

        var tailleBody = $('body').height();
        //console.log(tailleBody);
        var tailleHeader = $('header').height();
        //console.log(tailleHeader);
        var tailleFooter = $('footer').height();
        //console.log(tailleFooter);
        var tailleMainContent = (tailleBody - 40) - (tailleHeader + tailleFooter);
        //console.log(tailleMainContent);
        $('.main-content').css("min-height", tailleMainContent);
        $('aside').css("min-height", tailleMainContent);
    });

    $('.choice-color').on('change', function() {
        var couleur = $(this).val();
        if(couleur == "bleue")
            $('.color').css('color', 'blue');
        else if(couleur == "rouge")
            $('.color').css('color', 'red');
        else if(couleur == "vert")
            $('.color').css('color', 'green');
        else if(couleur == "noir")
            $('.color').css('color', 'black');
        else if(couleur == "jaune")
            $('.color').css('color', 'yellow');
        else if(couleur == "marron")
            $('.color').css('color', 'brown');
        else 
            $('.color').css('color', 'orange');

    });

    $('.choice-font').on('change', function() {
        var font = $(this).val();
        if(font == "courier")
            $('.font').css('font-family', 'courier');
        else if(font == "arial")
            $('.font').css('font-family', 'Arial');
        else if(font == "helvetica")
            $('.font').css('font-family', 'Helvetica');
        else if(font == "verdana")
            $('.font').css('font-family', 'Verdana');
        else if(font == "avantgarde")
            $('.font').css('font-family', 'Avantgarde');
        else if(font == "impact")
            $('.font').css('font-family', 'Impact');
        else 
            $('.font').css('font-family', 'FreeMono');

    });

});
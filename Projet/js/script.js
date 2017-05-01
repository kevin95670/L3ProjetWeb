$(document).ready(function() {
	
    var tailleBody = $('body').height();
    //console.log(tailleBody);
    var tailleHeader = $('header').height();
    //console.log(tailleHeader);
    var tailleFooter = $('footer').height();
    //console.log(tailleFooter);
    var tailleMainContent = (tailleBody - 40) - (tailleHeader + tailleFooter);
    //console.log(tailleMainContent);

    var widthDiapo = $('.main-content').width();

    $('.main-content').css("min-height", tailleMainContent);
    $('aside').css("min-height", tailleMainContent);
    $('#diaporama').css("width", widthDiapo);
    $('#diaporama img').css("width", widthDiapo);

    $(window).on('resize', function() {

        var tailleBody = $('body').height();
        //console.log(tailleBody);
        var tailleHeader = $('header').height();
        //console.log(tailleHeader);
        var tailleFooter = $('footer').height();
        //console.log(tailleFooter);
        var tailleMainContent = (tailleBody - 40) - (tailleHeader + tailleFooter);
        //console.log(tailleMainContent);

        var widthDiapo = $('.main-content').width();

        $('.main-content').css("min-height", tailleMainContent);
        $('aside').css("min-height", tailleMainContent);
        $('#diaporama').css("width", widthDiapo);
        $('#diaporama img').css("width", widthDiapo);
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

    var minuteur=setInterval(function()
        {
            var position=parseInt($('#diapo-img').css('left'));
            if(position%widthDiapo!==0){return;}
            position-=widthDiapo;
            if(position<-widthDiapo*3){position=0;}
            $('#diapo-img').animate({left: position});       
        },2000);

    $('#diapo-fleches span').mousedown(function()
        {
            if(minuteur!==false)
            {
                clearInterval(minuteur);
                minuteur=false;
            }
            var position=parseInt($('#diapo-img').css('left'));
            if(position%widthDiapo!==0){return;}
            var flecheDroite=$(this).attr('id')==='diapo-droite';
            position+=(flecheDroite ? -widthDiapo : widthDiapo);
            if(position<-widthDiapo*3 || position>0){return;}
            $('#diapo-img').animate({left: position});
        });

});
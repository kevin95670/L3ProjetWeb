$(document).ready(function() {
	
    var tailleBody = $('body').height();
    //console.log(tailleBody);
    var tailleHeader = $('header').height();
    //console.log(tailleHeader);
    var tailleFooter = $('footer').height();
    //console.log(tailleFooter);
    var tailleMainContent = (tailleBody - 40) - (tailleHeader + tailleFooter);
    //console.log(tailleMainContent);
    $('.main-content').css("height", tailleMainContent);
    $('aside').css("height", tailleMainContent);

    $(window).on('resize', function() {

        var tailleBody = $('body').height();
        //console.log(tailleBody);
        var tailleHeader = $('header').height();
        //console.log(tailleHeader);
        var tailleFooter = $('footer').height();
        //console.log(tailleFooter);
        var tailleMainContent = (tailleBody - 40) - (tailleHeader + tailleFooter);
        //console.log(tailleMainContent);
        $('.main-content').css("height", tailleMainContent);
        $('aside').css("height", tailleMainContent);
    });

});
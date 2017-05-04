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



    $('#pseudo').change(function(event)
    {
        $.post('http://localhost/Projet/php/inscrit.php',
          {pseudo : $('#pseudo').val(),
          //mail : $('#mail').val(),
          mdp : $('#motPasse').val(),
          confirm : $('#confirm').val(),
          genre : $('input[name=genre]:checked').val()
      },
      function(reponse)
      {
        if(reponse == "existant"){
            $('#erreur-pseudo').text("Pseudo existant ! ");
            $('#erreur-pseudo').css('color','#fecc00');
            $('#erreur-pseudo').css('font-weight', 'bold');
            $('#erreur-pseudo').show();
        }
        else{
            $('#erreur-pseudo').hide();
        }
    });

    });

    $('.modification #newPseudo').change(function(event)
    {
        $.post('http://localhost/Projet/php/update.php',
          {pseudo : $('.modification #newPseudo').val(),
          //mail : $('#mail').val(),
          old : $('.modification #old').val(),
          new : $('.modification #new').val(),
          newConfirm : $('.modification #newConfirm').val(),
          genre : $('.modification input[name=genre]:checked').val()
      },
      function(reponse)
      {
        console.log(reponse);
        if(reponse == "existant"){
            $('#erreur-pseudo').text("Pseudo existant ! ");
            $('#erreur-pseudo').css('color','#fecc00');
            $('#erreur-pseudo').css('font-weight', 'bold');
            $('#erreur-pseudo').show();
        }
        else{
            $('#erreur-pseudo').hide();
        }
    });

    });

    $('#confirm').keyup(function(event)
    {
        var mdp = $("#motPasse").val();
        var confirme=$("#confirm").val();
        if(mdp != confirme)
        {
            $('#erreur-mdp').text("Mot de passe different ! ");
            $('#erreur-mdp').css('color','#fecc00');
            $('#erreur-mdp').css('font-weight', 'bold');
            $('#erreur-mdp').show();
        }
        else
        {
            $('#erreur-mdp').hide();
        }

    });

  /*  $('#mail').keyup(function(event)
    {
        var mail = $("#mail").val();
        if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mail))
        {
            $('#erreur-mail').hide();

        }
        else
        {
            $('#erreur-mail').text("Format de mail non valide ! ");
            $('#erreur-mail').css('color','#fecc00');
            $('#erreur-mail').css('font-weight', 'bold');
            $('#erreur-mail').show();
        }

    });*/

var minuteur=setInterval(function()
{
    var position=parseInt($('#diapo-img').css('left'));
    if(position%widthDiapo!==0){return;}
    position-=widthDiapo;
    if(position<-widthDiapo*4){position=0;}
    $('#diapo-img').animate({left: position});       
},5000);

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
    if(position<-widthDiapo*4 || position>0){return;}
    $('#diapo-img').animate({left: position});
});



});
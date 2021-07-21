$(document).ready(function(){


    $('.cadastro').hide();

    $('.criar-conta').click(function(){

        $('.cadastro').show("fast");
        $('.login').fadeout("fast");

    })

    $('.fazer-login').click(function(){

        $('.cadastro').hide("fast");
        $('.login').show("fast");

    })

    


});

$(document).ready(function(){


    $('.cadastro').hide();

    $('.criar-conta').click(function(){

        $('.cadastro').show("slow");
        $('.login').hide("slow");

    })

    $('.fazer-login').click(function(){

        $('.cadastro').hide("slow");
        $('.login').show("slow");

    })

    


});

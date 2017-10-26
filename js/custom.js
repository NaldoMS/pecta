jQuery("document").ready(function($){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $("#imagem").css("top", "43px");
            $("#imagem").css("width", "164px");
            $("#imagem").css("height", "40px");
            $("#menu").css("marginTop", "57px");
        } else {
            $("#imagem").css("top", "0px");
            $("#imagem").css("width", "222px");
            $("#imagem").css("height", "54px");
            $("#menu").css("marginTop", "25px");
        }
    });

});
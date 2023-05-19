$(document).ready(function() {
    $("#btnPerfil").click(function(event) {
        $(".contenedorHome").load("/assets/php/perfil.php");
        $(".header__search").removeClass("div__hide");
        $(".header__input").removeAttr("hidden");
    });
});
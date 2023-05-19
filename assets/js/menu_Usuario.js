/*==================== SHOW NAVBAR ====================*/
const showMenu = (headerToggle, navbarId) =>{
    const toggleBtn = document.getElementById(headerToggle),
    nav = document.getElementById(navbarId)
    
    // Validate that variables exist
    if(headerToggle && navbarId){
        toggleBtn.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav_men_u class
            nav.classList.toggle('show-menu')
            // change icon
            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showMenu('header-toggle','navbar')

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))

function paginaCookie(e){
    let listaCookies = document.cookie.split(';');
    
    for (i in listaCookies) {
        let busca = listaCookies[i].search("pagina");

        if (busca == 1) {

            let prueba = listaCookies[i].split("=");
            let resultado = prueba["1"];
            return resultado;
        }
    }
}

$(document).ready(function() {

    

    $("#home").click(function(event) {
     $(".contenedorHome").load("/assets/php/contenedorHome.php");
     $(".header__search").addClass("div__hide");
     $(".header__input").addAttr("hidden");
     
    });

    $("#todo").click(function(event) {
        $(".contenedorHome").load("/assets/php/todoEjercicios.php");
        $(".header__search").removeClass("div__hide");
        $(".header__input").removeAttr("hidden");
    });

    $("#musculacion").click(function(event) {
        $(".contenedorHome").load("/assets/php/musculacion.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });

    $("#cardio").click(function(event) {
        $(".contenedorHome").load("/assets/php/cardio.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });

    $("#estiramientos").click(function(event) {
        $(".contenedorHome").load("/assets/php/estiramientos.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });

    $("#otros").click(function(event) {
        $(".contenedorHome").load("/assets/php/otros.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });
    $("#btnPerfil").click(function(event) {
        $(".contenedorHome").load("/assets/php/perfil.php");
        $(".header__search").removeClass("div__hide");
        $(".header__input").removeAttr("hidden");
    });

    $("#perfil").click(function(event) {
        $(".contenedorHome").load("/assets/php/perfil.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });

    $("#contacto").click(function(event) {
        $(".contenedorHome").load("/assets/php/formularioContacto.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });
    $("#btnAdmin").click(function(event) {
        $(".contenedorHome").load("/assets/php/admin.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });
    $("#rutina").click(function(event) {
        $(".contenedorHome").load("/assets/php/rutina.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    });

    let pagina = paginaCookie("pagina");
    
    if(pagina == null || pagina == "" || pagina == undefined){
        $(".contenedorHome").load("/assets/php/contenedorHome.php");
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    }
    else{
        
        $(".contenedorHome").load("/assets/php/"+pagina);
        $(".header__search").addClass("div__hide");
        $(".header__input").addAttr("hidden");
    }


});

$(document).ready(function() {
    $(".contenedorHome").load("/assets/php/contenedorHome.php");
});

function buscar(){
    var datoBuscar = document.getElementById("buscador").value;
    document.cookie = "buscar=" + datoBuscar;
    $(".contenedorHome").load("/assets/php/buscar.php");
}





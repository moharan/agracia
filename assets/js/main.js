$(document).ready(function() {
    //alert("existe");
    function avanzar(){
        if(slider >=6){
            slider = 1;
        } else {
            slider++;
        }
        console.log("slider", slider);
        $("#slider ul li").css({"display":"none"});
        $("#slider ul li:nth-child(" + slider + ")").fadeIn();
    }
    var slider = 1;
    // funcionamiento al click
    });
    /*loop*/
    setInterval(function(){
        //llamando a funcion
        avanzar();
    },5000);
    $("#interiores").click (function () {
        swal("Interiores!", "...estamos aún trabajando en esta sección!");
        //window.location.href = "exteriores.html";
    });
});
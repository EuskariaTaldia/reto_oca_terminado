window.onload = iniciar;

function iniciar() {
    var gameModal = document.getElementById('myModal');

    // Comprobar el tipo de juegos
    var conPreguntas = document.getElementById("conPreguntas");
    var sinPreguntas = document.getElementById("sinPreguntas");
    
    // Comprobar el filtrado 
    var filtrado = document.getElementById("filtrado");
    var filtradoSelect = document.getElementById("filtradoSelect");


    if (gameModal != null) {
        gameModal.style.display = 'block';      

        conPreguntas.addEventListener("change", function() {            
            filtrado.style.display = "none";
        });

        sinPreguntas.addEventListener("change", function() {
            filtrado.style.display = "flex";
        });


        // Comprobar si el valor del filtro cambia
        filtradoSelect.addEventListener("change", nuevoValor);
    }


    // Codigo para el login
    login();
}


function nuevoValor() {
    var filtro = document.getElementById("filtradoSelect");
    var filtroVal = filtro.value;

    var especificacion = document.getElementById("especificacion");
    var especificacionSelect = document.getElementById("especificacionSelect");

    // Dependiendo el filtrado que quiera debe tener un tipo de especificacion u otro    
    var arrayAreas = document.getElementById("arrayAreas").value;   
    var arrayZonas = document.getElementById("arrayZonas").value;


    // Añadir las opciones 
    if (filtroVal == "azar") {
        especificacion.style.display = "none";
        $("#especificacionSelect").empty();
    
    } else if(filtroVal == "campo"){
        // Select de AREA
        especificacion.style.display = "flex";
        $("#especificacionSelect").empty();

        var arrayAreas = JSON.parse(arrayAreas);
        for (var i = 0; i < arrayAreas.length; i++) {

            var option = document.createElement("option");
            option.value = arrayAreas[i].area;
            option.text = arrayAreas[i].area;
            
            especificacionSelect.appendChild(option);
        }

   
    } else if(filtroVal == "zona"){
        // Select de ZONAS
        especificacion.style.display = "flex";
        $("#especificacionSelect").empty();

        var arrayZonas = JSON.parse(arrayZonas);
        for (var i = 0; i < arrayZonas.length; i++) {
            if(arrayZonas[i].codZona != "0"){
                var option = document.createElement("option");
                option.value = arrayZonas[i].zona;
                option.text = arrayZonas[i].zona;
                especificacionSelect.appendChild(option);
            }            
        }
    }


}


function login() {
    $(document).ready(function () {
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');
    });


    $('.login-reg-panel input[type="radio"]').on('change', function () {
        if ($('#log-login-show').is(':checked')) {
            $('.register-info-box').fadeOut();
            $('.login-info-box').fadeIn();

            $('.white-panel').addClass('right-log');
            $('.register-show').addClass('show-log-panel');
            $('.login-show').removeClass('show-log-panel');

        }
        else if ($('#log-reg-show').is(':checked')) {
            $('.register-info-box').fadeIn();
            $('.login-info-box').fadeOut();

            $('.white-panel').removeClass('right-log');

            $('.login-show').addClass('show-log-panel');
            $('.register-show').removeClass('show-log-panel');
        }
    });

}




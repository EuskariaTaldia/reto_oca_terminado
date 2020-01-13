window.onload = iniciar;

function iniciar() {
    var modal = document.getElementById('myModal')
    if (modal != null) {
        modal.style.display = 'block';
        
        // Comprobar si el valor del filtro cambia
        document.getElementById("filtro").addEventListener("change", nuevoValor);
    }


    // Codigo para el login
    login();    

}


function nuevoValor() {
    var filtro = document.getElementById("filtro").value;   
    
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




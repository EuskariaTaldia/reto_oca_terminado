window.addEventListener("load", hasiera);

function hasiera() {     
    var btnsEditPeti = document.getElementsByClassName("iconEditPeti");
    for (var i = 0; i < btnsEditPeti.length; i++){
        btnsEditPeti[i].addEventListener("click", editPeti);
    }

}


function editPeti(e) {
    var icon = e.target;
    var mujer = e.target.parentNode.className;
    alert(mujer);

    var nombreMujer = document.getElementsByClassName(mujer)[0];
    var fechas = document.getElementsByClassName(mujer)[1];
    var codArea = document.getElementsByClassName(mujer)[2];
    var subArea = document.getElementsByClassName(mujer)[3];
    var zonaGeografica = document.getElementsByClassName(mujer)[4];
    var pais = document.getElementsByClassName(mujer)[5];
    var foto = document.getElementsByClassName(mujer)[6];
    var enlace = document.getElementsByClassName(mujer)[7];
    var datos = document.getElementsByClassName(mujer)[8];

    // Comprobamos si estan para editar
    if (nombreMujer.readOnly) {
        nombreMujer.readOnly = false;
        fechas.readOnly = false;
        codArea.readOnly = false;
        subArea.readOnly = false;
        zonaGeografica.readOnly = false;
        pais.readOnly = false;
        foto.readOnly = false;
        enlace.readOnly = false;
        datos.readOnly = false;

        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-save iconEditPeti";
        icon.parentNode.type ="button";       
    
    } else {
        nombreMujer.readOnly = false;
        fechas.readOnly = false;
        codArea.readOnly = false;
        subArea.readOnly = false;
        zonaGeografica.readOnly = false;
        pais.readOnly = false;
        foto.readOnly = false;
        enlace.readOnly = false;
        datos.readOnly = false;

        // Cambiamos el tipo de icono
        icon.className = "fa fa-lg fa-edit iconEditPeti";
        icon.parentNode.type ="submit";       
    }
}

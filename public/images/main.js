var mapArray=[
    [21,20,19,18,17,16,15,14],
    [22,43,42,41,40,39,38,13],
    [23,44,57,56,55,54,37,12],
    [24,45,58,63,62,53,36,11],
    [25,46,59,60,61,52,35,10],
    [26,47,48,49,50,51,34,9],
    [27,28,29,30,31,32,33,8],
    [0,1,2,3,4,5,6,7]
];

var jugadores = [];
var casillasEspeciales = [6, 12 , 19, 31, 42, 26, 53, 58, 63, 5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54, 59]
var casillaOca = [5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54, 59];
var MoverFicha;
var coloresJuga=["red","blue","green","yellow"]
// Tirada sanciona, como por ejemplo al caer en el pozo, 
//es un  array de array con esta forma
//[[jugador , sancion]
//[ jugador , sancion]]
//sanciones 1== 1 turno 2==  pozo  3== amaiera
//se guardara en local storaje
var TiradaSancionada = [];

    var tipoJuego = document.getElementById("tipoJuego").value;
    var especificacion = document.getElementById("especificacion").value;
    var jokalariKopurua = document.getElementById("jugador").value;

    for(var i=0;i<8;i++){
        for(var j=0;j<8;j++){
            console.log("gola");
            $(".tabla").append('<div id="' + mapArray[i][j] + '">' + mapArray[i][j] + '</div>');
        for(var k=0;k<=jokalariKopurua;k++){
            $(".tabla").append('<img id="'+k+'" src="../public/images/'+this.coloresJuga[k]+'.svg" style="display:none">')
            }
        }

    }

    // var my_text=prompt('jokalari kopurua');
    // if(my_text) alert(my_text);

    window.localStorage.setItem('turno', 1);
    window.localStorage.setItem('sancion', TiradaSancionada)
    // jokalariKopurua=my_text;
    // alert(jokalariKopurua);
    hasiera(jokalariKopurua);



function hasiera(jokalariKopurua){

    var jokalariak = parseInt(jokalariKopurua, 10);
    // for que crear el array de jugadores
    for(i = 1 ; i <= jokalariak ; i++){
        var turno = 0;
        var casilla = 0;
        // El nombre del array es igual al numero del jugador
        var nombre = [turno, casilla];
        var Sancion = 0;
        jugadores.push(nombre);
        TiradaSancionada.push(Sancion);
    }
    
    // Guardamos el numero de jugadores
    window.localStorage.setItem('numJuga', jugadores.length);
    alert("Jugadores -> " + jugadores.length);
}

function onclikar(){
    jugador = window.localStorage.getItem('turno');
    numJuga = window.localStorage.getItem('numJuga');

    tirada(jugador, numJuga);
}

function dado(){
    var die1 = document.getElementById("die1");
    var d1 = Math.floor(Math.random() * 6) + 1;
  
    // var pos =d1 + y;
    switch(d1){
        case d1=1:
            die1.innerHTML = "<img src='../resources/images/dado1.png' alt='dado1'>";
        break;
        case d1=2:
            die1.innerHTML = "<img src='../resources/images/dado2.png' alt='dado2'>";
        break;
        case d1=3:
            die1.innerHTML = "<img src='../resources/images/dado3.png' alt='dado3'>";
        break;
        case d1=4:
            die1.innerHTML = "<img src='../resources/images/dado4.png' alt='dado4'>";
        break;
        case d1=5:
            die1.innerHTML = "<img src='../resources/images/dado5.png' alt='dado5'>";
        break;
        case d1=6:
            die1.innerHTML = "<img src='../resources/images/dado6.png' alt='dado6'>";
        break;
        }
        return d1;
}
function tirada(jugador,numJuga){
       var d1= dado(jugador,numJuga);
        valores(jugador,d1);
        cambiosPantalla(jugador,numJuga);
    }
    ///esta funcion define en el arrai "jugadores" los valores de las tiradas del "jugador"
function valores(jugador,d1){
 
    alert("acaba de tirar el jugador "+jugador)
    //definimos jugador en formato array "-1"
    jugador=jugador-1;
    //se recoje los valores anteriores antes de la tirada actual
    jugaJugador = jugadores[jugador][0];
    tiradaAnterior = jugadores[jugador][1];
    //se suma un turno
    jugadores[jugador][0] = jugaJugador+d1;
    //definimos la tirada actual
    TiradaActual=tiradaAnterior+d1
    //comprobamos que el numero en el que ha caido este turno no es una casilla especial
    var encontrado=false;
    encontrado=tiradaRealizada(jugador,TiradaActual);
    if(encontrado==false){
        //la casilla en la que caemos es normal
        alert("encont")
        jugadores[jugador][1] = TiradaActual;
        cambiarColores(jugador);

    }
}
function tiradaRealizada(jugador,TiradaActual){
    var encontrado=false;
    alert("TiradaActual: "+TiradaActual)
    for(i=0;i<=casillasEspeciales.length;i++){
        if((TiradaActual)==casillasEspeciales[i]){
            alert("entramis IF tirada:"+TiradaActual)
            switch(TiradaActual){
                case 6:
                case 12:
                    alert("!puente")
                        //metodo
                        encontrado=true;
                        caerPuente(jugador,TiradaActual);
                    break;
                case 26:
                case 53:
                    alert("!dado")
                        //metodo
                        encontrado=true;
                        caerDado(jugador,TiradaActual);
                    break;
                 case 19:
                    alert("!posada")
                        //metodo
                        encontrado=true;
                        caerPosada(jugador,TiradaActual);
                    break;
                case 31:
                        //metodo
                         encontrado=true;
                         caerPozo(jugador,TiradaActual); 
                    break;
                case 42:
                    alert("!laberinto")
                        //metodo
                        encontrado=true;
                        caerLaberinto(jugador,TiradaActual);
                    break;
                case 58:
                    alert("!ocalaveraca¡")
                        //metodo
                        encontrado=true;
                        caerCalavera(jugador,TiradaActual);
                    break;
                case 63:                
                case 64:
                case 65:
                case 66:
                case 67:
                case 68:
                         alert("!amaitu")
                          encontrado=true;
                        amaitu(jugador,TiradaActual);
                    break;
                case 5:
                case 9:
                case 14:
                case 18:
                case 23:
                case 27:
                case 32:
                case 36:
                case 41:
                case 45:
                case 50:
                case 54:
                case 59:
                      //metodo
                      encontrado=true;
                      alert("!oca¡")
                    caerOca(jugador,TiradaActual)  ;
                    break;

            }
        }
      
    }
    return encontrado;
}
function caerOca(jugador,TiradaActual){
//¡de desayuno a desayuno ,y si la conozco , gano uno!
alert("hola estoy metido en la funcuon CAEROCA")
//Calculamos la casilla
if(casillaOca.indexOf(TiradaActual)!=-1){
    //la variable mover ficha indica a donde hay que mover la ficha
     MoverFicha=casillaOca[((casillaOca.indexOf(TiradaActual))+1)];
    }
    //canviamos el valor del array que mueve la ficha
    jugadores[jugador][1]=MoverFicha;
    cambiarColores(jugador);
}
function caerPuente(jugador,TiradaActual){
//¡De manifestación en manifestacion hasta la liberación!
//CASILLAS 6 Y 12
//Calculamos la casilla
    switch(TiradaActual){
        case 6:
            MoverFicha=12;
            break;
        case 12:
            MoverFicha=6;
            break;
    }
    //canviamos el valor del array que mueve la ficha
    jugadores[jugador][1]=MoverFicha;
    tiradaRealizada();
    cambiarColores(jugador);
} 
function caerDado(jugador,TiradaActual){
    //doble tirada
    //CASILLA 26,53
    //canviamos el valor del array que mueve la ficha
    
    var d1= dado(jugador);
    TiradaActual=TiradaActual+d1;

    jugadores[jugador][1]=MoverFicha;
    tiradaRealizada(jugador,TiradaActual)
    cambiarColores(jugador);

} 
function caerLaberinto(jugador,TiradaActual){
 //retrocede asta la cassila 30.
    //CASILLA 42
    MoverFicha=30;
    //canviamos el valor del array que mueve la ficha
     jugadores[jugador][1]=MoverFicha;
     cambiarColores(jugador);

}
function caerCalavera(jugador,TiradaActual){
    //retrocede asta la cassilla 1
    //CASILLA 58
    MoverFicha=1;
    //canviamos el valor del array que mueve la ficha
    jugadores[jugador][1]=MoverFicha;
    cambiarColores(jugador);
}
function caerPosada(jugador,TiradaActual){
    //se piederde un turno
    //CASILLA 19
    //sancionamos la caida en la posada
    TiradaSancionada[jugador]=1;
    alert("la sancion se canbio a"+TiradaSancionada)
    //damos el valor al movimieno
    jugadores[jugador][1]=TiradaActual;
    cambiarColores(jugador);

}
function caerPozo(jugador,TiradaActual){
    //no juegas asta que otro jugador pase por esa casilla
    //si solo juega un jugador esta casilla se considerara una casilla normal
    TiradaSancionada[jugador]=2;

    //damos el valor al movimieno
    jugadores[jugador][1]=TiradaActual;
    cambiarColores(jugador);
}

function amaitu(jugador,TiradaActual){
    //al jugador se le acaban los turnos
    TiradaSancionada[jugador]=3;
    //damos el valor al movimieno
    jugadores[jugador][1]=TiradaActual;
    cambiarColores(jugador);
    //CASILLA 63
    if(TiradaActual>63){
       var sorpres = TiradaActual-63
       MoverFicha = 63-sorpres
    }
    if(TiradaActual==63){
        //terminar turnos
    }
    jugadores[jugador][1]=MoverFicha;
    cambiarColores(jugador);
}

function cambiarColores(jugador){
    turno.innerHTML = "tiro del jugador"+jugadores[jugador][0];
    //definimos la casilla que queremos cambiar 
    classeCambiar = jugadores[jugador][1].toString();
    alert("bamos a cambiar el color esta es la classe cambiar: "+classeCambiar)
    //definimos los colores de cada jugador 
    colorJugador= "green";
    //cambiamos el color    
    document.getElementById(classeCambiar).style.backgroundColor = colorJugador;
}

function cambiosPantalla(jugador,numJuga){
alert("entramos canbios pantalla")
alert("el jugador es " +jugador)
 //datos de tirada y canbios realizados
 jugador=parseInt(jugador, 10)+1;
 //dependiendo del numero de jugadores buelbe al comienzo
if(jugador>parseInt(numJuga,10)){
     jugador=1;
 }
 //buscar sanciones


 var variable = jugador;
 if(variable % 2){
     variable = variable-1;
 }
 //alert("el valor del jugador es : "+jugador)
 //alert("la sanciones antes de la tirada son: "+sanciones)
 //alert("aver que pasa: "+sanciones[variable])
 
 Sanc = TiradaSancionada[variable];
 alert( TiradaSancionada[variable] +"es sancion?")
if(parseInt(Sanc,10)!=0){  
     alert("si")
     funcionSancion(jugador,Sanca)
     $('#squarespaceModal').modal('show'); 
     jugador++
    }
    else{
     alert("no")
    }
 //señala el numero del jugador al que le toca tirar
 tiro.innerHTML = "turno del jugador"+jugador;
 //guarda el turnode del jugador
 window.localStorage.setItem('turno',jugador);
}
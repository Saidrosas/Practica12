function calcula_velocidadlineal(){
    // Datos
    var radioEstrella = 20; 
    var tiempoVuelta = 4.3; 
    var velocidadlineal = (2 * Math.PI * radioEstrella) / tiempoVuelta;
    var aceleracionCentripeta = (4 * Math.pow(Math.PI, 2) * radioEstrella) / Math.pow(tiempoVuelta, 2);
    console.log("La velocidad lineal es: " + velocidadlineal.toFixed(2) + " km/s");
    console.log("La aceleración centrípeta es: " + aceleracionCentripeta.toFixed(2) + " km/s²");
        
var d=document.getElementById("resultadoA");
d.innerHTML=densidad+' km/s²';
}
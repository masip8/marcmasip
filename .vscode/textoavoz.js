//es una variable que inicia un array vuit i va guardant els textos que converteix a veu
var textosGuardados = [];
//es una funció que el que fa es agafar el text que poses i l'assigna a la variable "texto" que agafa tot el text del 
//<textarea> per  fer mes accions
function convertirTextoAVoz() {
  var texto = document.getElementById('textToSpeak').value;

  //Aquesta linea serveix per verificar si el navegador es compatible amb aquest sintesis de veu
  //despres li assigna la variable "synthesis" al sintesis de veu per utilitzar la funció de traducció de text a veu amb aquesta variable
  if ('speechSynthesis' in window) {
    var synthesis = window.speechSynthesis;

    // aqui es crea la variable "utterance" (que serveix per configurar diferents propietats del text traduit a veu) i se li assigna
    //a la variable "texto" que es tot el text que vol traduir l'usuari
    var utterance = new SpeechSynthesisUtterance(texto);

    // Reprodueix el text en veu amb la funció "speak" que l'assigna a la variable utterance
    synthesis.speak(utterance);

    // Agrega el text al array de "textosGuardados" i el guarda
    textosGuardados.push(texto);

    //Actualitza el contingut del div amb la funció i la id 'textDisplay', es posa el text dins del <div> repetint la secuencia de textos
    var textDisplay = document.getElementById('textDisplay');
    textDisplay.innerHTML = ''; // fa que no es repeteixi el text anterior del div, neteja el contingut anterior
    
    // Es un bucle que recorreix els textos guardats y els agrega com a paragrafs al div
    for (var i = 0; i < textosGuardados.length; i++) {
      var textoGuardado = textosGuardados[i]; //asigna variable textoGuardado al array
      var paragraph = document.createElement('p');//crea la variable paragraph per a que faci la funció de convertir a paragraf
      paragraph.textContent = textoGuardado; //estableix el contingut del array a la variable "paragraph"
      paragraph.onclick = crearEventoClic(textoGuardado); // agrega el controlador d'esdeveniments 
      textDisplay.appendChild(paragraph); //agrega la variable paragraph div per a que siguin paragrafs 
    }


    //Fa que al donarli al button "traduir" s'esborri el text del <textarea> 
      document.getElementById('textToSpeak').value = '';
  } 
}
//Es un esdeveniment que fa que funcioni el sintesis de veu, despres li assigna el text que vol traduir a veu i el tradueix
function crearEventoClic(texto) {
  return function() {
    var synthesis = window.speechSynthesis;
    var utterance = new SpeechSynthesisUtterance(texto);
    synthesis.speak(utterance);
  };
}


  
  
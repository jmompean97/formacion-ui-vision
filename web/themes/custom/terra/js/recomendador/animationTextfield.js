var typed = null;

// After transition callback 
function animationPlaceholder(text, timeout, speed) {

  timeByLetter = ((timeout+speed) * 0.5);

  typed = new Typed('#buscador-recomendador', {
    strings: [text],
    typeSpeed: 70,
    attr: 'placeholder',
    loop: false
  });

  // Se añade el texto al atributo recomendacion para realizar las busquedas
  jQuery('#buscador-recomendador').attr('recomendacion',text);

}

// Before transition callback 
function destroyAnimationPlaceholder(){
  if(typed){
    typed.destroy();
  }
}
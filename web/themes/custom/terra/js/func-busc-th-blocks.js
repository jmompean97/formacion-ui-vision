(function ($) {
  $(document).ready(function(){

    //Añade clase para posicionar el select del numero de elementos cuando no haya paginacion
    if ($(".views-element-container").has(".pagination").length == 0) {
      $(".views-element-container").addClass("view-npag");
      $(".views-exposed-form").has(".form-item-items-per-page").addClass("nelemns-npag");
    }

    // Asigna el evento click al título del bloque de las facetas
    var faceta = ".busc-th-blocks .right";
    $(".block-jda-views-pages > div > h4").on( "click", function(e) {
      $(faceta).children(".block-jda-views-pages").toggleClass("open");
    });

    //Desplaza las facetas en responsive o desktop
    var windowsize = $(window).width();
    $(window).resize(function() {
      windowsize = $(window).width();
      if (windowsize < 992) {
        $(faceta).insertAfter(".busc-th-blocks .left-top");
      }else{
        $(faceta).insertAfter(".busc-th-blocks .left");
      }
    });

    if (windowsize < 992) {
      $(faceta).insertAfter(".busc-th-blocks .left-top");
    }else{
      $(faceta).insertAfter(".busc-th-blocks .left");
    }

    //Añade atributo placeholder
    $('input.form-date').attr("placeholder", "dd-mm-yyyy");

    //Añade una máscara al input para controlar lo que inserta el usuario
    $('input.form-date').inputmask("datetime",{
      inputFormat: "dd-mm-yyyy"
    }); 
  });
})(jQuery);
(function ($) {

  $(document).ready(function(){
    var form_id = $('form').attr('id');
    $(".form-item-sort-by select").attr("form", form_id);
    $(".form-item-items-per-page select").attr("form", form_id);
    $(".title-cont .form-submit").attr("form", form_id);
    $(".adv-btn-submit .form-submit").attr("form", form_id);
    $(".form-item-title input").attr("form", form_id);

    $(".form-item-sort-by select").change(function() {
      $('form').submit();
    });
    $(".form-item-items-per-page select").change(function() {
      $('form').submit();
    });

    // Asigna el evento click al título del bloque de las facetas
    var faceta = "main .layout__region--second";
    $(".block-jda-views-pages > div > h4").on( "click", function(e) {
      $(faceta).children(".block-jda-views-pages").toggleClass("open");
    });

    //Desplaza las facetas en responsive o desktop
    var windowsize = $(window).width();
    $(window).resize(function() {
      windowsize = $(window).width();
      if (windowsize < 992) {
        $(faceta).insertAfter("main .view-filters");
      }else{
        $(faceta).insertAfter("main .layout__region--first");
      }
    });

    if (windowsize < 992) {
      $(faceta).insertAfter("main .view-filters");
    }else{
      $(faceta).insertAfter("main .layout__region--first");
    }

    //Añade atributo placeholder
    $('input.form-date').attr("placeholder", "dd-mm-aaaa");

    //Añade una máscara al input para controlar lo que inserta el usuario
    $('input.form-date').inputmask("datetime",{
      inputFormat: "dd-mm-yyyy",
      placeholder: "dd-mm-aaaa"
    }); 
  });

  if (!(document.documentMode || /Edge/.test(navigator.userAgent))) {
    var details = document.querySelector("details"); 

    if (typeof(details) != 'undefined' && details != null){
      if(details.open == true){
        $('.adv-btn-submit').removeClass( "d-none" );
      }else{
        $('.adv-btn-submit').addClass( "d-none" );
      }
    }
  }

  // Acciones para cuando se ejecuta ajax
  $(document).on('change', '.form-item-sort-by select', function (evt) {
    var form_id = $('form').attr('id');
    $(".form-item-sort-by select").attr("form", form_id);
    $('form').submit();
  });

  $(document).on('change', '.form-item-items-per-page select', function (evt) {
    var form_id = $('form').attr('id');
    $(".form-item-items-per-page select").attr("form", form_id);
    $('form').submit();
  });

  $(document).on('click', '.form-actions button', function (evt) {
    $('form').submit();
  });

  $(document).ajaxSuccess(function () {
    if (!(document.documentMode || /Edge/.test(navigator.userAgent))) {
      var details = document.querySelector("details");

      if (typeof(details) != 'undefined' && details != null){
        details.addEventListener("toggle", function(e) {
          if(e.target.open == true){
            $('.adv-btn-submit').removeClass( "d-none" );
          }else{
            $('.adv-btn-submit').addClass( "d-none" );
          }
        });
      }
    } else{
      $('.adv-btn-submit').removeClass( "d-none" );
    }
  });
})(jQuery);
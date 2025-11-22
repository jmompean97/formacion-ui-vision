/**
 * @file
 * Dynamic table of contents (toc) support.
 */
(function($) {
  Drupal.behaviors.terra_toc_js = {
    attach: function(context, settings) {

      // Stick the toc.
      function terra_toc() {
        $('.toc-js.sticky', context).each(function () {
          var sticky = $(this);

          if (sticky.hasClass('is-sticked')) {
            // Fixed positioned elements become detached, set explicit width.
            sticky.width(sticky.parent().width());
          }
          else {
            sticky.width('auto');
            sticky.css("top", "0");
          }
        });
      }

      $(window).scroll(terra_toc);
      terra_toc();


      /* Desplaza el Directo a según el tamaño de pantalla*/
      if($(".toc-js").css("display") == "block"){  
        function desplazaDirectoA(size) {
          if (size < 992) {
            //Mueve el toc a su posición inicial en responsive
            $(".block-field-blocknodepagina-estandarfield-directo-a").insertAfter("main .block-toc-js");
          }else{
            //Coloca el directo a dentro del toc para que se desplace
            $(".block-field-blocknodepagina-estandarfield-directo-a").insertAfter("main .toc-js>nav");
          }
        }

        var windowsize = $(window).width();
        desplazaDirectoA(windowsize);

        $(window).resize(function() {
          windowsize = $(window).width();
          desplazaDirectoA(windowsize); 
        });

      }
      /***/
    }
  };

})(jQuery);

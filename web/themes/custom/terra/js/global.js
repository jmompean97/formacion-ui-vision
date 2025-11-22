/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function(context, settings) {
      var position = $(window).scrollTop();
	    $(window).scroll(function() {
        if ($(this).scrollTop() > 50){
          $('body').addClass("scrolled");
        }
        else{
          $('body').removeClass("scrolled");
        }
        var scroll = $(window).scrollTop();
        if (scroll > position) {
          $('body').addClass("scrolldown");
          $('body').removeClass("scrollup");
        } else {
          $('body').addClass("scrollup");
          $('body').removeClass("scrolldown");
        }
        position = scroll;
      });

      var toggleAffix = function(affixElement, scrollElement, wrapper) {
        var height = affixElement.outerHeight(),
            // EVERIS - ajimerio - 22/03/2019
            top = wrapper.offset().top;
        var height_top = $('#navbar-top').outerHeight();

        if (scrollElement.scrollTop() >= top){
            wrapper.height(height);
            affixElement.addClass("affix");
            if(affixElement.attr('id') ==  'navbar-main') affixElement.css("top", height_top + "px");
        }
        else {
            affixElement.removeClass("affix");
            if(affixElement.attr('id') ==  'navbar-main') affixElement.css("top", "0");
            wrapper.height('auto');
        }
      };

        /* EVERIS: ajimerio - 18/03/2019

        añadido 'once()' espacio en blanco superior generado por la plantilla al hacer affix
        en el header.
        */
      $(once('affix', '[data-toggle="affix"]')).each(function() {
        var ele = $(this),
          wrapper = $('<div></div>');
        ele.before(wrapper);
        $(window).on('scroll resize', function() {
          toggleAffix(ele, $(this), wrapper);
        });
        // init
        toggleAffix(ele, $(window), wrapper);
      });


      /* DR añade/quita class al elemento activo del menu mobile */
      /*$('.navbar-toggler').once().click(function(){
        $('body').toggleClass('scroll-fixed');
      });*/

      $(once('menu', '.menu-msd .dropdown-toggle')).click(function(){
        if($(this).hasClass('elem-activo')) {
          $(this).removeClass('elem-activo');
        } else {
          $('.menu-msd .dropdown-toggle').removeClass('elem-activo');
          $(this).addClass('elem-activo');
        }
      });

      // DR añade una X para cerrar el dropdown en versión desktop
      $('.cierre-custom-button').click(function(){
        $('.dropdown-menu').removeClass('show');
        $('.menu-msd .dropdown-toggle').removeClass('elem-activo');
      });

      // DR al scroll de #page esconde el dropdown-menu
      $(window).scroll(function() {
        if ($(this).scrollTop()>0) {
          $('.dropdown-menu').removeClass('show').fadeOut(400);
        }
      });

      // DR form de asistencia juridica
      $(once('formulario-juridico', '.form-juridico')).submit(function(e) {
        e.preventDefault();
        
        var p1 = $("input[name='p1']:checked").val(); // Si/No
        var p2 = $("input[name='p2']:checked").val(); // Si/No
        var p3 = $("input[name='p3']:checked").val(); // Si/No
        var p4 = $("input[name='p4']:checked").val(); // 1/2-3/4+
        var p5solicitante = $("input[name='s']").val(); // solicitante
        var p5conyuge = $("input[name='c']").val(); // conyuge
        var p5hijo = $("input[name='h']").val(); // hijo
        var p6recursos = $("input[name='r']").val(); // otros recursos
        var p7 = $("input[name='p7']:checked").val(); // Si/No
        var p8 = $("input[name='p8']:checked").val(); // Si/No

        var respuestas = [
          "<h2>Resultado de la simulación</h2><p><strong>El resultado de esta simulación es orientativo y con los datos aportados procedería ser beneficiario de asistencia jurídica gratuita, para los procesos que tengan vinculación, deriven o sean consecuencia de su condición de víctima. Para otros procedimientos tendrás que facilitar los recursos económicos de que dispones. <br />En caso de sentencia absolutoria firme o archivo firme del proceso penal que se inicia, se pierde el beneficio de la justicia gratuita, sin que tengas que abonar el coste de las prestaciones disfrutadas gratuitamente hasta el momento.<br />Muchas gracias.</strong></p>",
          "<h2>Resultado de la simulación</h2><p><strong>El resultado de esta simulación es orientativo y con los datos aportados podrías ser beneficiario de asistencia jurídica gratuita, para los procesos cuyo objeto sea la reclamación de indemnización por los daños personales y morales sufridos. Para otros procedimientos tendrás que facilitar los recursos económicos de que dispones.<br />Muchas gracias.</strong></p>",
          "<h2>Resultado de la simulación</h2><p><strong>El resultado de esta simulación es orientativo y con los datos aportados podrías ser beneficiario de asistencia jurídica gratuita.<br />Muchas gracias.</strong></p>",
          "<h2>Resultado de la simulación</h2><p><strong>Este caso necesariamente debe ser estudiado por el Colegio de Abogados y la Comisión de Asistencia Jurídica que le corresponda por razón de su domicilio.<br />Muchas gracias.</strong></p>",
          "<h2>Resultado de la simulación</h2><p><strong>El resultado de esta simulación es orientativo y con los datos aportados no podrías ser beneficiario de asistencia jurídica gratuita.<br />Muchas gracias.</strong></p>",
          "<h2>Resultado de la simulación</h2><p><strong>El resultado de esta simulación es orientativo y con los datos aportados podrías ser beneficiario de asistencia jurídica gratuita, una vez sea valorada por la Comisión de Asistencia Jurídica Gratuita tu excepcionalidad.<br />Muchas gracias.</strong></p>"
        ];

        var res_mensaje = respuestas[4]; // Mensaje 5 
        
        if(p1 == "Sí" || p2 == "Sí") {
          res_mensaje = respuestas[0]; //Mensaje 1
        } else if (p3 == "Sí") {
          res_mensaje = respuestas[1]; //"Mensaje 2";
        } else {
          if ((p4 == "1") && (parseFloat(p5solicitante) + parseFloat(p6recursos) < 12908.06)) {
            if (p7 == "Sí") {
              res_mensaje = respuestas[3]; //"Mensaje 4";
            } else {
              res_mensaje = respuestas[2]; //"Mensaje 3";
            }
          } else if ((p4 == "2-3") && (parseFloat(p5solicitante) + parseFloat(p5conyuge) + parseFloat(p5hijo) + parseFloat(p6recursos) < 16135.07)) {
            if (p7 == "Sí") {
              res_mensaje = respuestas[3]; //"Mensaje 4";
            } else {
              res_mensaje = respuestas[2]; //"Mensaje 3";
            }
          } else if ((p4 == "4+") && (parseFloat(p5solicitante) + parseFloat(p5conyuge) + parseFloat(p5hijo) + parseFloat(p6recursos) < 19362.09)) {
            if (p7 == "Sí") {
              res_mensaje = respuestas[3]; //"Mensaje 4";
            } else {
              res_mensaje = respuestas[2]; //"Mensaje 3";
            }
          } else {
            if ((p8 == "Sí") && (parseFloat(p5solicitante) + parseFloat(p5conyuge) + parseFloat(p5hijo) + parseFloat(p6recursos) < 31950.00)) {
              res_mensaje = respuestas[5]; //"Mensaje 6";
            } else if ((p8 == "Sí") && (parseFloat(p5solicitante) + parseFloat(p5conyuge) + parseFloat(p5hijo) + parseFloat(p6recursos) >= 31950.00)) {
              res_mensaje = respuestas[4]; //"Mensaje 5";
            }
          }
        }

        $("html, body").animate({
          scrollTop: $(".mensaje-resultado").offset().top - 150
        }, 2000);

        console.log($(".mensaje-resultado").offset().top);

        $(".mensaje-resultado").empty().append(res_mensaje);
      });

      $(".quick-node-block-wrapper:not(:has(h2))").addClass('content-ntitle');
      $(".block-blocks-terra:not(:has(h2))").addClass('content-ntitle');
      $(".block-block-content:not(:has(h2))").addClass('content-ntitle');

      if ($("#block-terra-page-title").css('display') == 'none') {
        $("#block-terra-page-title").remove();
      }
      
      // Accesibilidad: contenido para los WC descriptivo
      if ($('.block-blocks-terra-wc-twitter').children('.content').children('#descr-tw').length == 0) {
        $('.block-blocks-terra-wc-twitter').children('.content').children('matter-twitter').before('<div id="descr-tw" class="sr-only">Informacion del twitter</div>');
      }

      if ($('.block-blocks-terra-wc-last-boja').children('.content').children('#descr-boja').length == 0) {
        $('.block-blocks-terra-wc-last-boja').children('.content').children('matter-last-boja').before('<div id="descr-boja" class="sr-only">Informacion del ultimo boja</div>');
      }

      if ($('.block-blocks-terra-wc-carousel').children('.content').children('#descr-act').length == 0) {
        $('.block-blocks-terra-wc-carousel').children('.content').children('matter-carousel').before('<div id="descr-act" class="sr-only">Informacion de actualidad</div>');
      }
      
      const widthFullSize  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

      // Evita pulsar sobre los primeros niveles de la navegacion superior durante la carga de la pagina
      /*if (widthFullSize > 991) {
        $('nav.navigation > div > ul > li > a').css( 'pointer-events', 'none' );
      }*/

      //Añade etiqueta para las Redes sociales en el tipo de contenido Datos básicos
      if ($(".encab-secc").children("#label-redes").length == 0) {
        $(".node__content .encab-secc .label-social-network").first().closest(".block").before("<div id='label-redes' class='block'><div class='field__label'>Redes sociales</div><div class='field__item'></div></div>");
        $('.node__content .encab-secc .label-social-network').closest(".block").prependTo($('#label-redes>.field__item'));
      }

      if (widthFullSize < 992) {
      // Navegacion superior: recoge el menu responsive al pulsar fuera de cualquier opcion primaria
        $('nav.navigation').click(function() {
          $('#CollapsingNavbar').collapse('hide');
          $("body.fixedPosition").removeClass("fixedPosition");
        });
      }

      $(once('bootstrap_barrio_subtheme', 'html')).each(function() {
  
        /*function disableHeaderClicks() {
          $('nav.navigation > div > ul > li > a').css( 'pointer-events', 'all' );
        }
  
        window.onload = disableHeaderClicks;*/

        if (widthFullSize < 992) {
          $('.navbar-toggler').click(function() {
            $("body").toggleClass("fixedPosition");
          });
        }

      });
      
      //Desplaza las imágenes del encabezado al contenido de sección en Detalle Intervenciones Bienes Patrimonio Histórico
      if ($('.cont-secc').children('.field--name-field-img-intervencioness').length == 0) {
        $(".encab-secc .field--name-field-img-intervencioness").prependTo('.cont-secc');
      }  

      //Se comprueba si el input date es compatible con el navegador.
      //Si es compatible se modifica el formato de la fecha de entrada.

      if ($(".cont-busq input.form-date").length > 0) {
        if (Modernizr.inputtypes.date) {
          //Se modifica el atributo input type 'date' a 'text' para la versión antigua de Edge
          var isIE = /*@cc_on!@*/false || !!document.documentMode;
          var isEdge = !isIE && !!window.StyleMedia;
          if(isEdge){
            $('.cont-busq input.form-date').attr("type","text");
            $('.cont-busq input.form-date').datepicker({
              language: "es",
              todayHighlight: true,
              format: 'dd-mm-yyyy'
            });
          }else{
            $('.cont-busq input.form-date').datepicker({
              language: "es",
              todayHighlight: true,
              format: 'yyyy-mm-dd'
            });
            $('.cont-busq input.form-date').click(function(e){
              e.preventDefault();
            });
          }
        } else {
          $('.cont-busq input.form-date').datepicker({
            language: "es",
            todayHighlight: true,
            format: 'dd-mm-yyyy'
          });
        }
      }

      //Añadir la clase container a los controles del slider de portada
      $(".cont-slide-sep .views-slideshow-controls-bottom").addClass("container");
    }
  };

  $(document).ready(function () {
    var stHeight = $('.carrousel-listado-enlaces .slick-track').height();
    $('.carrousel-listado-enlaces .slick-track .slick-slide').css('height',stHeight + 'px' );
  });

})(jQuery, Drupal);
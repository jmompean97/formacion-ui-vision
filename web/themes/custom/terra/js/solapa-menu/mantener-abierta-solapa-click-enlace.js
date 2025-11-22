(function ($) {
    $(document).ready(function(){

      $( ".menu-msd .position-static:not(.not-solapa) > a" ).on( "click", function(e) {
        e.preventDefault();

        if($(this).parent("li.position-static").children(".dropdown-menu").hasClass("show")){
          $("li.position-static").children(".dropdown-menu").removeClass("show");
        }else{
          $("li.position-static").children(".dropdown-menu").removeClass("show");
          $(this).parent("li.position-static").children(".dropdown-menu").addClass("show");
        }

        e.stopPropagation();
        
      });

      $( "#page-wrapper" ).on( "click", function() {
        $("li.position-static").children(".dropdown-menu").removeClass("show");
      });
      
      $("div.dropdown-menu").on("click", function(e){
        e.stopPropagation();     
      });
      
});
})(jQuery);
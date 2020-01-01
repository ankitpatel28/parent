require(['jquery', 'jquery/ui'], function($){
 jQuery(document).ready(function() {
     jQuery("#show_hide").click(function () {
jQuery( ".menu" ).toggle({
        duration: 3000,
    });
  });
   jQuery("#home").click(function () {
jQuery( "#ul" ).toggle({
    });
  });    
  });
});
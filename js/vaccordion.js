(function ($) {
  $(document).ready(function(){
    $('.ding_nodelist-vertical_accordion').each(function(){
      var c_width = $(this).width();
      console.log($(this).find('.va-slice:first').height());
      $(this).vaccordion({
        accordionH: 450,
        expandedHeight: 350,
        accordionW: c_width,
        animOpacity: 0.2
      });
    });
  });
  
})(jQuery);

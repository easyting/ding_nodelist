(function ($) {
  $(document).ready(function(){
    $('.ding_nodelist-vertical_accordion').each(function(){
      var c_width = $(this).width();
      var sum_height = 0;
      $(this).find('.va-slice').each(function(){
        sum_height += $(this).height();
      });
      sum_height /= 1.8;
      console.log(Math.round(sum_height));
      $(this).vaccordion({
        accordionH: Math.round(sum_height),
        expandedHeight: $(this).find('.va-slice:first').height(),
        accordionW: c_width,
        animOpacity: 0.2
      });
    });
  });
  
})(jQuery);

(function ($) {
  $(document).ready(function(){
    $('.ding_nodelist-horizontal_accordion').each(function(){
      var c_width = $(this).width();
      $(this).find('.ding_nodelist-items').zAccordion({
        timeout: 4000,
        width: c_width,
        height: 350,
        slideClass: 'slide'
      });
    });
  });
})(jQuery);

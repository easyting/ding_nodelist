(function ($) {
  $(document).ready(function(){
    $('.ding_nodelist-horizontal_accordeon').each(function(){
      var c_with = $(this).width();
      $(this).find('.ding_nodelist-items').zAccordion({
        timeout: 4000,
        width: c_with,
        height: 350,
        slideClass: 'slide'
      });
    });
  });
})(jQuery);

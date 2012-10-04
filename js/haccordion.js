(function ($) {
  $(document).ready(function(){
    $('.ding_nodelist-horizontal_accordion').each(function(){
      var c_width = $(this).width();
      var delay = $(this).attr('class').split(' ').pop();
      delay = parseInt(Drupal.settings.ding_nodelist[delay]);
      $(this).find('.ding_nodelist-items').zAccordion({
        timeout: delay,
        width: c_width,
        height: 350,
        slideClass: 'slide'
      });
    });
  });
})(jQuery);

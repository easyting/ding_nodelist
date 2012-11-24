(function ($) {
  $(document).ready(function(){
    $('.ding_nodelist-horizontal_accordion').each(function(){
      var c_width = $(this).width();
      var classes = $(this).attr('class').split(' ');
      // Slide change speed must not be greater than the pause
      // and has a default value of 1200.
      var anim_speed = 1200;
      delay = 0;
      // Find pane's ID to get its delay settings.
      $(classes).each(function(i, item){
        if (item.match(/pane\-\d+/)) {
          delay = parseInt(Drupal.settings.ding_nodelist[item]);
        }
      })
      // Ensure the speed at least equals the timeout.
      if (anim_speed > delay) {
        anim_speed = delay;
      }
      $(this).find('.ding_nodelist-items').zAccordion({
        timeout: delay,
        speed: anim_speed,
        width: c_width,
        height: 350,
        slideClass: 'slide'
      });
    });
  });
})(jQuery);

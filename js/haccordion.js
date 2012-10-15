(function ($) {
  $(document).ready(function(){
    $('.ding_nodelist-horizontal_accordion').each(function(){
      var c_width = $(this).width();
      var classes = $(this).attr('class').split(' ');
      delay = 0;
      // Find pane's ID to get its delay settings.
      $(classes).each(function(i, item){
        if (item.match(/pane\-\d+/)) {
          delay = parseInt(Drupal.settings.ding_nodelist[item]);
        }
      })
      $(this).find('.ding_nodelist-items').zAccordion({
        timeout: delay,
        width: c_width,
        height: 350,
        slideClass: 'slide'
      });
    });
  });
})(jQuery);

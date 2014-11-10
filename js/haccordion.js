(function ($) {
  $(document).ready(function() {
    function runAccordion (height) {
      $('.ding_nodelist-horizontal_accordion').each(function() {
        var c_width = $(this).width(),
          classes = $(this).attr('class').split(' '),
          // Slide change speed must not be greater than the pause
          // and has a default value of 1200.
          anim_speed = 1200,
          delay = 0,
          nodelist_items = $(this).find('.ding_nodelist-items');

        // Find pane's ID to get its delay settings.
        $(classes).each(function(i, item){
          if (item.match(/pane\-\d+/)) {
            delay = parseInt((Drupal.settings.ding_nodelist[item]), 10);
          }
        });

        // Ensure the speed at least equals the timeout.
        if (anim_speed > delay) {
          anim_speed = delay;
        }

        // Destroy previos accordion
        nodelist_items.zAccordion('destroy');

        // Run new accordion
        nodelist_items.zAccordion({
          timeout: delay,
          speed: anim_speed,
          width: c_width,
          height: height,
          slideClass: 'slide',
          buildComplete: function () {
            nodelist_items.css('visibility', 'visible').fadeIn(1500);
          },
          animationStart: function () {
            nodelist_items.find('.slide').find('i').removeClass('icon-right-circled').addClass('icon-plus-circle');
            nodelist_items.find('.slide-open').find('i').removeClass('icon-plus-circle').addClass('icon-right-circled');
          }
        });
      });
    }

    /**
     * Check for current window size and run accordion
     */
    function checkWindowSizeandRun () {
      var currentWidth = $(document).width(),
      scrollWidth = window.innerWidth - $(document).width();

      if (currentWidth <= (768 - scrollWidth)) {
        runAccordion(280);
      }

      else if (currentWidth > (768 - scrollWidth) && currentWidth <= (1024 - scrollWidth)) {
        runAccordion(320);
      }

      else if (currentWidth > (1024 - scrollWidth)) {
        runAccordion(360);
      }
    }

    // First run
    checkWindowSizeandRun();

    // Recalculate accordion
    $(window).resize(function () {
      checkWindowSizeandRun();
    });
  });
})(jQuery);

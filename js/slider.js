(function ($) {
  $(document).ready(function () {
    $('.next-prev a').click(function (e) {
      e.preventDefault();
    });

    $('.ding_nodelist-slider').each(function(){
      $(this).find('.ding_nodelist-items').newsTicker({
        row_height: 95,
        max_rows: 4,
        duration: 4000,
        direction: 'down',
        pauseOnHover: 0,
        prevButton: $('.next-prev .prev'),
        nextButton: $('.next-prev .next')
      });
    });
  });
})(jQuery);

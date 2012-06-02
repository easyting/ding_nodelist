(function ($) {
  $(document).ready(function () {
    $('.ding_nodelist-slider').each(function(){
      $(this).find('.ding_nodelist-items').carouFredSel({
        circular: true,
        infinite: true,
        direction: 'down',
        auto : {
          pauseOnHover: true,
          pauseDuration: 5000
        },
        width: 'auto',
        responsive: true,
        items: {
          visible: 3,
          width: '100%'
        },
        scroll : {
          items: 3
        },
        prev: {
          button: $(this).find('.prev'),
          key: "prev"
        },
        next: {
          button: $(this).find('.next'),
          key: "next"
        }
      });
    });
  });
})(jQuery);

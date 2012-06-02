(function ($) {
  $(document).ready(function () {
    $('.ding_nodelist-carousel').each(function(){
      $(this).find('.ding_nodelist-items').carouFredSel({
        circular: true,
        infinite: true,
        direction: 'left',
        auto : {
          pauseOnHover: true,
          pauseDuration: 5000
        },
        width: '100%',
        responsive: true,
        items: 1,
        scroll : {
          items: 1
        },
        pagination : {
          container : $(this).find('.pagination')
        },
        prev: {
          button: $(this).find('.prev'),
          key: "left"
        },
        next: {
          button: $(this).find('.next'),
          key: "right"
        }
      });
    });
    
  });
})(jQuery);

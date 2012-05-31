(function ($) {
  $(document).ready(function () {   
    $('.ding_nodelist-carousel .ding_nodelist-items').carouFredSel({
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
        container : '.pagination'
      }
    });
  });
})(jQuery);

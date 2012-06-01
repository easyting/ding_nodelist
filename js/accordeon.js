(function ($) {
  $(document).ready(function(){
    console.log($('.ding_nodelist-horizontal_accordeon'));
    
    $('.ding_nodelist-horizontal_accordeon').each(function(){
      var c_with = $(this).width();
      console.log($(this));
      $(this).find('.ding_nodelist-items').zAccordion({
        timeout: 4000,
        width: c_with,
        height: 350,
        animationComplete: function(a, b, c) {
          if ($(this).index() == 0) {
            $(this).parent().find('li').last().find('.data').hide(400);
            $(this).prev().removeClass('active');
          } else {
            $(this).prev().find('.data').hide(400);
            $(this).prev().removeClass('active');
          }
          $(this).find('.data').show(400);
          $(this).prev().addClass('active');
        }
      });
      $(this).find('.ding_nodelist-items li:first').addClass('active');
    });
  });
})(jQuery);
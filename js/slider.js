(function ($) {
  $(document).ready(function () {
    $('.next-prev a').click(function (e) {
      e.preventDefault();
    });

    /**
     * Finds and returns highest item
     */
    function findHighestItem(items) {
      var highestItem = 0;

      items.each(function() {
        if($(this).height() > highestItem) {
          highestItem = $(this).height();
        }
      });

      return highestItem;
    }

    $('.ding_nodelist-slider .ding_nodelist-items').each(function() {
      var nodelistItems = $(this);

      // Find highest nodelist item and make other same height
      var rowHeight = findHighestItem(nodelistItems.find('.item'));

      nodelistItems.find('.item').height(rowHeight);

      nodelistItems.newsTicker({
        row_height: rowHeight,
        max_rows: 3,
        duration: 4000,
        direction: 'down',
        pauseOnHover: 0,
        prevButton: $('.next-prev .prev'),
        nextButton: $('.next-prev .next')
      });
    });

    // Check for changes on resize
    // $(window).resize(function() {
    //   $('.ding_nodelist-slider .ding_nodelist-items').each(function (i, e) {
    //     var nodelistItems = $(this);

    //     // Find highest nodelist item and make other same height
    //     var rowHeight = findHighestItem(nodelistItems.find('.item'));
    //     console.log(rowHeight);
    //     nodelistItems.newsTicker('updateOption','row_height', rowHeight);
    //   });
    // });

  });
})(jQuery);

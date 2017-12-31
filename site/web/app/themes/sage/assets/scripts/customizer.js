(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });

  $('p:empty').remove();
  console.log("um;");
})(jQuery);

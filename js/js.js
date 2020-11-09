jQuery(function() {
    jQuery('.hamburger').click(function() {
        jQuery(this).toggleClass('active');

      if (jQuery(this).hasClass('active')) {
        jQuery('.globalMenuSp').addClass('active');
      } else {
        jQuery('.globalMenuSp').removeClass('active');
      }
  });
});
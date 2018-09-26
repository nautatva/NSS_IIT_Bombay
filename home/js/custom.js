(function($) {
  /* ----------------------------------------------------------- */
  /*  1. SCROLL DOWN
	/* ----------------------------------------------------------- */

  // $('.mu-scrolldown').click(function(event) {
  //   event.preventDefault();
  //   //calculate destination place
  //   var dest = 0;
  //   if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
  //     dest = $(document).height() - $(window).height();
  //   } else {
  //     dest = $(this.hash).offset().top;
  //   }
  //   //go to destination
  //   $('html,body').animate({ scrollTop: dest }, 1000, 'swing');
  // });

  /* ----------------------------------------------------------- */
  /*  2. SCROLL TOP BUTTON
  	/* ----------------------------------------------------------- */

  //Check to see if the window is top if not then display button

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 300) {
      jQuery('.scrollToTop').fadeIn();
    } else {
      jQuery('.scrollToTop').fadeOut();
    }
  });
})(jQuery);

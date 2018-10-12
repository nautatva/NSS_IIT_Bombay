function stick() {
  // When the user scrolls the page, execute myFunction
  window.onscroll = function() {
    myFunction();
    // console.log($("#fbReach").offset().top);
    // console.log($(window).scrollTop());
    
    
    // console.log('$("reach").scrollHeight: ', $('reach').scrollHeight);
    // console.log(
    //   "$('reach').scrollTop() + $('reach').innerHeight(): ",
    //   $('reach').scrollTop()
    // );

    // if ($('reach').scrollTop() >= $('reach').scrollHeight) {
    //   alert('end reached');
    // }
  };

  // Get the navbar
  let navbar = document.getElementById('sticky-navbar');
  let stickylim = navbar.offsetTop - 53;
  let mfix = document.getElementById('m-fix');

  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset >= stickylim) {
      navbar.classList.add('sticky');
      mfix.style.height = '47px';
    } else {
      navbar.classList.remove('sticky');
      mfix.style.height = '0';
    }
  }

  // $('#reach').bind('scroll', function() {
  //   console.log('$(this)[0].scrollHeight: ', $(this)[0].scrollHeight);
  //   console.log(
  //     '$(this).scrollTop() + $(this).innerHeight(): ',
  //     $(this).scrollTop() + $(this).innerHeight() );

  // if (
  //   $(this).scrollTop() + $(this).innerHeight() >=
  //   $(this)[0].scrollHeight
  // ) {
  //   alert('end reached');
  // }
  // });
}

function flip() {
  // $('#js-flip-1').toggle(
  //   function() {
  //     $('#js-flip-1 .card').addClass('flipped');
  //   },
  //   function() {
  //     $('#js-flip-1 .card').removeClass('flipped');
  //   }
  // );

  // row 1
  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-1 .card1').toggleClass('flipped');
    }, 3000);
  }, 2000);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-2 .card1').toggleClass('flipped');
    }, 3000);
  }, 200);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-3 .card1').toggleClass('flipped');
    }, 3000);
  }, 1300);

  // row 2
  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-4 .card1').toggleClass('flipped');
    }, 3000);
  }, 1000);

  // $('#js-flip-5').bind('click mouseleave', function() {
  //   $('#js-flip-5 .card1').toggleClass('flipped');
  // });

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-6 .card1').toggleClass('flipped');
    }, 3000);
  }, 1340);

  // row 3
  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-7 .card1').toggleClass('flipped');
    }, 3000);
  }, 2000);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-8 .card1').toggleClass('flipped');
    }, 3000);
  }, 2400);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-9 .card1').toggleClass('flipped');
    }, 3000);
  }, 3000);

  // $('#js-flip-3').bind({
  //   click: function() {
  //     $('#js-flip-3 .card').toggleClass('flipped');
  //   },
  //   mouseleave: function() {
  //     $('#js-flip-3 .card').toggleClass('flipped');
  //   }
  // });
}
function tog() {}

// https://codepen.io/johnmotyljr/pen/tkipE

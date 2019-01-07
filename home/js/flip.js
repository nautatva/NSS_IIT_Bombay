function flip() {
  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-1 .card1').toggleClass('flipped');
    }, 5000);
  }, 10);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-2 .card1').toggleClass('flipped');
    }, 5000);
  }, 2500);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-3 .card1').toggleClass('flipped');
    }, 5000);
  }, 1500);

  // row 2
  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-4 .card1').toggleClass('flipped');
    }, 5000);
  }, 500);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-6 .card1').toggleClass('flipped');
    }, 5000);
  }, 3700);

  // row 3
  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-7 .card1').toggleClass('flipped');
    }, 5000);
  }, 1200);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-8 .card1').toggleClass('flipped');
    }, 5000);
  }, 4340);

  // setTimeout(() => {
    setInterval(function() {
      $('#js-flip-9 .card1').toggleClass('flipped');
      console.log('this');
    }, 5000);
  // }, 100);
  console.log('start');
}

$(document).ready(function() {
  flip();
});
// https://codepen.io/johnmotyljr/pen/tkipE

function flip() {
  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-1 .card1').toggleClass('flipped');
    }, 3000);
  }, 2300);

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

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-6 .card1').toggleClass('flipped');
    }, 3000);
  }, 2700);

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
  }, 1340);

  setTimeout(() => {
    setInterval(function() {
      $('#js-flip-9 .card1').toggleClass('flipped');
    }, 3000);
  }, 0);
}

$(document).ready(function() {
  flip();
});
// https://codepen.io/johnmotyljr/pen/tkipE

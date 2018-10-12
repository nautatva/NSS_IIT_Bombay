function addCommas(nStr) {
  nStr += '';
  let x = nStr.split('.');
  let x1 = x[0];
  let x2 = x.length > 1 ? '.' + x[1] : '';
  let rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
}

function increaseNumber() {
  if (i < 201000) {
    $('.statistics-count').text(addCommas(i));
    i = i + 1041;
  }
}
var i = 0;
element = '.statistics-count';
finalNumber = 4;
var nextIn;
function numbers() {
  setInterval(increaseNumber, 25);
}

$(window).scroll(function() {
  var hT = $('.statistics-count').offset().top,
      hH = $('.statistics-count').outerHeight(),
      wH = $(window).height(),
      wS = $(this).scrollTop();
  if (wS > (hT+hH-wH)){
   numbers();
  }
});

// /* Statistics Counter */
// $('.statistics').appear(function() {
//   var counter = $(this).find('.statistics-count');
//   var toCount = counter.data('count');

//   $(counter).countTo({
//     from: 0,
//     to: toCount,
//     speed: 5000,
//     refreshInterval: 50
//   });
// });

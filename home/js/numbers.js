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

function increaseNumber(str, number,increament) {
  let variable = 0;
  setInterval(function() {
    if (variable < number) {
      $(str).text(addCommas(variable));
      variable = variable + increament;
    }
  }, 25);
}

// var volunteer = 0;
// var children = 0;
// var reach = 0;
let once = 0;
// element = '.statistics-count';
// finalNumber = 4;
// var nextIn;
function numbers() {
  if (once==0) {
    once = 1;
    increaseNumber('.volunteers', 20133,1043);
    increaseNumber('.children', 3230, 233);
    increaseNumber('.followers',13380,1233);
    increaseNumber('.initiatives',30,1);
    increaseNumber('.subscribers',92352,5342)
  }
}

$(window).scroll(function() {
  var hT = $('.statistics-count').offset().top,
    hH = $('.statistics-count').outerHeight(),
    wH = $(window).height(),
    wS = $(this).scrollTop();
  if (wS > hT + hH - wH) {
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

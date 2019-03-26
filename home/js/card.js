// $(document).ready(function() {
//   let el = $('.card .data .title');
//   $.each(el, function(i, e) {
//     console.log($(e));

//     let fontSize = $(e).css('font-size');
//     let lineHeight = parseInt(fontSize.replace('px', ''));
//     console.log('lineHeight', lineHeight);

//     let divHeight = parseInt(
//       $(e)
//         .css('height')
//         .replace('px', '')
//     );
//     console.log('divHeight', divHeight);

//     let lines = Math.floor(divHeight / lineHeight);
//     $(e)
//       .parent()
//       .parent()
//       .addClass('line' + lines);
//   });
// });

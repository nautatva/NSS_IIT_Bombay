// $('.portfolio-modal').on('hidden.bs.modal', function(e) {
//   $(function() {
//     $.scrollify({
//       section: '.scrollify',
//       setHeights: false
//     });
//   });
// });

$('.portfolio-modal').on('shown.bs.modal', function(e) {
  $.scrollify.destroy();
});

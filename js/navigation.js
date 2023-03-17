(function ($) {
	$(document).ready(function () {
		// $('#mobile-icon').click(function (e) {
		// 	e.preventDefault();
		// 	$('#popout').animate({ left: '0px' });
		// 	console.log('mobile icon clicked');
		// 	// $('#mobile-icon').html(<span>X</span>);
		// 	// $('#mobile-icon').addClass('close-menu');
		// });
		// $('.close-menu').click(function () {
		// 	$('#popout').animate({ left: -250 });
		// 	$('#mobile-icon').html(<span>X</span>);
		// 	$('#mobile-icon').removeClass('close-menu');
		// });
		$('#mobile-icon').on('click', function (event) {
			// e.preventDefault();
			$('#popout').animate({ left: 0 }, 'slow');
			// $('#popout').animate({ left: '0px' });
			// console.log('mobile icon clicked');
			// $('#mobile-icon').html(<span>X</span>);
			// $('#mobile-icon').addClass('close-menu');
		});
	});
})(jQuery);

// (function ($) {
// 	$(document).ready(function () {
// 		$('#mobile-icon').click(function () {
// 			$('#popout').toggle(
// 				function () {
// 					$('#popout').animate({ left: 0 }, 'slow', function () {
// 						$('#mobile-icon').html('<span>x</span>');
// 					});
// 				},
// 				function () {
// 					$('#popout').animate({ left: -250 }, 'slow', function () {
// 						$('#mobile-icon').html('<img src="../assets/menu-rounded.png" alt="Show" />');
// 					});
// 				}
// 			);
// 		});
// 	});
// })(jQuery);

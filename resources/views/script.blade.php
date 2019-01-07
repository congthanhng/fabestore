
<!--===============================================================================================-->	
<script src="source/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="source/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="source/vendor/bootstrap/js/popper.js"></script>
<script src="source/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="source/vendor/select2/select2.min.js"></script>
<script>
	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});
	})
</script>
<!--===============================================================================================-->
<script src="source/vendor/daterangepicker/moment.min.js"></script>
<script src="source/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="source/vendor/slick/slick.min.js"></script>
<script src="source/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="source/vendor/parallax100/parallax100.js"></script>
<script>
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="source/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
	<!--===============================================================================================-->
	<script src="source/vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->	
	<script src="source/vendor/sweetalert/sweetalert.min.js"></script>
	<!--===============================================================================================-->
	<script src="source/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="source/js/main.js"></script>
	<script src="source/js/global.js"></script>


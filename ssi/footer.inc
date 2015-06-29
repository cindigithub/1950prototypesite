<footer>
	<div class="footer-wrapper">KCWD Designs 2015 &copy;</div>
</footer>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
	$(function() {
		$('.collapsible').on('click', '.open .main-list-anchor', function(e) {
			e.preventDefault();
			var $anchor = $(e.currentTarget);
			$anchor.parent('li').toggleClass('open');
		});
	});
</script>
jQuery(document).ready(function( $ ) {

	$(".search-btn").on('click', function(){
		event.preventDefault();
		$(".search-field").toggle('slide');
	});

});

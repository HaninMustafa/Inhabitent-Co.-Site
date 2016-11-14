jQuery(document).ready(function( $ ) {

	$(".search-btn").on('click', function(){
		event.preventDefault();
		$(".main-navigation .search-field").toggle('slide');
	});

});

/**
 * Custom js
 */
(function( $ ) {
	/* Force WordPress menu markup to match Bootstrap's */
	$('#navbar .nav > li').addClass('dropdown');
	$('#navbar .nav > .current-menu-item').addClass('active');
	$('#navbar .nav > .menu-item-has-children > a')
		.addClass('dropdown-toggle').attr('data-toggle', 'dropdown').append('<b class="caret"></b>')
		.siblings('.sub-menu').addClass('dropdown-menu');

})( jQuery );

/**
 *                                             _             _
 *     ___ ___  _ __ ___ _ __   ___  _ __ ___ (_)_ __   __ _| |
 *    / __/ _ \| '__/ _ \ '_ \ / _ \| '_ ` _ \| | '_ \ / _` | |
 *   | (_| (_) | | |  __/ | | | (_) | | | | | | | | | | (_| | |
 *    \___\___/|_|  \___|_| |_|\___/|_| |_| |_|_|_| |_|\__,_|_|
 *
 *   Webmaster: Philip Newborough
 *   Contact: corenominal [at] corenominal.org
 *   Twitter: @corenominal
 *   From: Lincoln, United Kingdom
 */
 jQuery( document ).ready( function( $ ){
	/**
	 * Prevent Link titles from wrapping on the external link icon alone
	 */
	$('.post h1 a, .post h2 a').html(function()
	{	
	    var icon = '<i class="fa fa-external-link"></i>';
	    if( $( this ).html().indexOf( icon ) > -1 )
	    {	    
	      var text = $( this ).html().replace( icon, '' );
	      text = text.trim().split(' ');
	      if( text.length > 1 )
	      {
	      var last = text.pop();
	      return text.join(" ") + (text.length > 0 ? ' <span class="nowrap">' + last + ' ' + icon + '</span>' : last);
	      }
	    }
	});
	/**
	 * FitVids
	 */
	$( '.post' ).fitVids();
	/**
 	 * Blockquote niceties
 	 */
 	$( 'blockquote' ).each(function( i ) {
		$( this ).prepend( '<i class="fa fa-quote-left"></i>' );
	});

 });
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
/**
 * Foo logo
 */
function foologo()
{
	var wrapper = document.getElementById('logo');
	var test = document.getElementById( 'foologo' );
	console.log( test );
	if( test == null )
	{
		var canvas_el = '<canvas id="foologo" class="foologo" width="200" height="200"></canvas>';
		wrapper.innerHTML = canvas_el + wrapper.innerHTML;
	}
	var canvas = document.getElementById('foologo');
	var c = canvas.getContext('2d');
	var interval = 1;

	c.fillStyle = 'rgba(255, 255, 255, 1)';
	c.fillRect(0,0,200,200);

	var render = function()
	{
		
		c.fillStyle = 'rgba(255, 255, 255, 1)';
		c.fillRect(0,0,200,200);
		for(y = 20; y <= 160; y = y + 20)
		{
			for(x = 20; x <= 160; x = x + 20)
			{
				r = Math.floor((Math.random() * 3) + 1);
				switch(r)
				{
					case 1:
						c.fillStyle = 'rgba(17, 17, 17, 1)';
						break;
					case 2:
						c.fillStyle = 'rgba(255, 255, 255, 1)';
						break;
					default:
						c.fillStyle = 'rgba(255, 255, 255, 1)';
						break;
				}
				c.fillRect(x,y,20,20);
			}
		}
	}

	var main = function()
	{
		render();
		
		if(interval < 100)
		{
			interval = interval + 1;
		}
		else if(interval < 200)
		{
			interval = interval + 10;
		}
		else if(interval < 300)
		{
			interval = interval + 50;
		}
		else if(interval < 400)
		{
			interval = interval + 100;
		}
		else
		{
			interval = interval + 200;
		}

		if(interval < 8000)
		{
			setTimeout(function()
			{
				main();
			}, interval);
		}
	}

	main();
}
/**
 * Stuff todo when the document is ready...
 */
jQuery( document ).ready( function( $ ){
	/**
	 * Foologo
	 */
	foologo();
	$( 'body' ).prepend( '<div id="foologo-underlay" class="foologo-underlay"></div>' );
	$( document ).on( 'click', '#foologo', function()
	{
		foologo();
		$( '#site-menu' ).slideToggle( 'fast' );
		$( '#foologo-underlay' ).fadeToggle( 'fast' );
		$('body').toggleClass('noscroll');
	});
	/**
	 * Page links in masthead
	 */
	if( $( '#pager' ).length )
	{
		if( $( '#previous_posts_link a' ).length )
		{
			var prev = $( '#previous_posts_link a' ).attr('href');
			$('#nav-icons').prepend( '<a class="pager-prev" href="' + prev + '"><i class="fa fa-chevron-right"></i></a>' );
		}
		else
		{
			$('#nav-icons').prepend( '<a class="pager-prev disabled" href="#"><i class="fa fa-chevron-right"></i></a>' );
		}

		if( $( '#next_posts_link a' ).length )
		{
			var next = $( '#next_posts_link a' ).attr('href');
			$('#nav-icons').prepend( '<a class="pager-next" href="' + next + '"><i class="fa fa-chevron-left"></i></a>' );
		}
		else
		{
			$('#nav-icons').prepend( '<a class="pager-next disabled" href="#"><i class="fa fa-chevron-left"></i></a>' );
		}
	}
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
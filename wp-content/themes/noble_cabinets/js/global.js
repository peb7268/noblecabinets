//setup everything when the blog is ready, no conflict mode for jqeury
jQuery(document).ready(function($){
	
	if($('#slider').length > 0){
		console.log('slider firing');
		$('#slider').cycle({
			 pager: '#sliderNav',
			 timeout: 6000,
			 fx: 'scrollLeft'
		});	
	}
	
	var color = $('#menu-primary li a').css('color');
	var bg = $('#menu-primary li a').css('backgroundColor');
	$('#menu-primary li a').hover(function(){
		$(this).animate({
			backgroundColor:'#331f0c'
			/* color:'#ceb9a4' */
			},500);
		},
		function(){
		console.log('hover off');
			$(this).animate({
				backgroundColor:bg
				/* color:color */ 
			},500);
			
	});
	
	//clear the search form out
	var val = $('#s').val();
	$('#s').click(function(){
		$('#s').val('');
	});
	
	$('#s').blur(function(){
		$('#s').val(val);
	});
	
	$('.sidebar-block ul').find('li:last').css('margin-bottom','10px');
	$('.sidebar-block ul#ads li:odd').addClass('odd');
	
	if	($('#top a p').length > 0 ){
		var tagline = $('#top a p').html();
		var tag = tagline.split('. ');
		tagline = '<span class="one">'+ tag[0] + '</span><span class="two">' + tag[1] + '</span>'; 
		$('#top a p').html(tagline);
	}
});

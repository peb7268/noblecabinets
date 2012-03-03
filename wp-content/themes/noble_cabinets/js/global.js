//setup everything when the blog is ready, no conflict mode for jqeury
jQuery(document).ready(function($){
	
	if($('#slider').length > 0){
		console.log('slider firing');
		$('#slider').cycle({
			 pager: '#sliderNav',
			 timeout: 6000,
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

	var val = $('#s').val();
	$('#s').click(function(){
		$('#s').val('');
	});
	
	$('#s').blur(function(){
		$('#s').val(val);
	});
});

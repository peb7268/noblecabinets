//setup everything when the blog is ready, no conflict mode for jqeury
jQuery(document).ready(function(a){if(a("#slider").length>0){console.log("slider firing");a("#slider").cycle({pager:"#sliderNav",timeout:6e3})}var b=a("#menu-primary li a").css("color"),c=a("#menu-primary li a").css("backgroundColor");a("#menu-primary li a").hover(function(){a(this).animate({backgroundColor:"#331f0c"},500)},function(){console.log("hover off");a(this).animate({backgroundColor:c},500)});var d=a("#s").val();a("#s").click(function(){a("#s").val("")});a("#s").blur(function(){a("#s").val(d)})});
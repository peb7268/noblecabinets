//setup everything when the blog is ready, no conflict mode for jqeury
jQuery(document).ready(function(a){if(a("#slider").length>0){console.log("slider firing");a("#slider").cycle({pager:"#sliderNav",timeout:6e3,fx:"scrollLeft"})}var b=a("#menu-primary li a").css("color"),c=a("#menu-primary li a").css("backgroundColor");a("#menu-primary li a").hover(function(){a(this).animate({backgroundColor:"#331f0c"},500)},function(){console.log("hover off");a(this).animate({backgroundColor:c},500)});var d=a("#s").val();a("#s").click(function(){a("#s").val("")});a("#s").blur(function(){a("#s").val(d)});a(".sidebar-block ul").find("li:last").css("margin-bottom","10px");a(".sidebar-block ul#ads li:odd").addClass("odd");var e=a("#top a p").html(),f=e.split(". ");e='<span class="one">'+f[0]+'</span><span class="two">'+f[1]+"</span>";a("#top a p").html(e)});
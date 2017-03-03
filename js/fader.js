$(window).on('load',function() {
		// Animate loader off screen
		$('body').addClass('loaded');
    if ($(window).width()>667){
	var images=["img/bg1.jpg","img/bg2.jpg","img/bg3.jpg","img/bg4.jpg","img/bg5.jpg","img/bg6.jpg","img/bg7.JPG","img/bg8.jpg","img/bg9.jpg","img/bg10.jpg","img/bg11.jpg","img/bg12.jpg","img/bg13.JPG"];
	}
	else{
		window.location="under_construction.html";	
	}
	
	var count= images.length;	
	var image=$(".fader");
    
    image.css("background-image","url("+images[Math.floor(Math.random()*count)]+")");
     /* setTimeout(function(){
        $('body').addClass('loaded');
    }, 3500); */
    
	setInterval(function(){
		image.fadeOut(350, function(){	
            image.css("background-image","url("+images[Math.round(Math.random()*count)]+")");
			image.fadeIn(350);		
			});
    },10000);
	});

$(document).ready(function(e){
    
    $(document).keypress(function(e){
    if (e.which == 13){
        $("#register").click();
    }
}); 
    	
});


 $(document).keypress(function(e){
    if (e.which == 13){
        $("#login").click();
    }
}); 

$(window).on('load',function() {
		// Animate loader off screen
		$('body').addClass('loaded');
});




$(document).ready(function(e){
    	// Init ScrollMagic
	var controller = new ScrollMagic.Controller();

	// build a scene
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.cate a',
        duration:'100%',
        triggerHook:0.8
	})
	.setClassToggle('.cate a', 'fade-in') // add class to project01
	.addTo(controller);
    
    var ourScene = new ScrollMagic.Scene({
		triggerElement: '.tuto a',
        duration:'100%',
        triggerHook:0.8
	})
	.setClassToggle('.tuto a', 'fade-in') // add class to project01
	.addTo(controller);
    
    var ourScene = new ScrollMagic.Scene({
		triggerElement: '.news a',
        duration:'100%',
        triggerHook:0.8
	})
	.setClassToggle('.news a', 'fade-in') // add class to project01
	.addTo(controller);
    
    //sectOne
	var imgSectOne=["img/bg1.jpg","img/bg2.jpg"];
    $(".sectOne").css("background-image","url("+imgSectOne[Math.floor(Math.random()*2)]+")");
    
    //sectTwo
    var imgSectTwo=["img/bg3.jpg","img/bg4.jpg"];
    $(".sectTwo").css("background-image","url("+imgSectTwo[Math.floor(Math.random()*2)]+")");
    
    //sectThree
    var imgSectThree=["img/bg5.jpg","img/bg6.jpg"];    
    $(".sectThree").css("background-image","url("+imgSectThree[Math.floor(Math.random()*2)]+")");
    
    //sectFour
    var imgSectFour=["img/bg7.JPG","img/bg8.jpg"];    
    $(".sectFour").css("background-image","url("+imgSectFour[Math.floor(Math.random()*2)]+")");

    
    //sectSix
    var imgSectSix=["img/bg11.jpg","img/bg12.jpg"];    
    $(".sectSix").css("background-image","url("+imgSectSix[Math.floor(Math.random()*2)]+")");
    
    setBindings();
});

function setBindings(){
    $("nav ul li a").click(function(e){
        var sectionID= e.currentTarget.id + "Section";
    $("html body").animate({
        scrollTop: $("#" + sectionID).offset().top-40
    },1000);
    });
}

$(window).scroll(function(){
    var scrollTop=$(this).scrollTop;
    $('.sect').css('background-position', -(scrollTop) + 'px');
})
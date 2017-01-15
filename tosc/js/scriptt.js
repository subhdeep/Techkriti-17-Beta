$(document).ready(function(){

$('.detail button').addClass('pulse animated');    
//console.log($.cookie("name"));
    
$('#start').on('click',function(){
 if($.cookie("rollno")!=null)
{
 if($.cookie("pay")==0)
{

window.location='http://2016.techkriti.org/picke/profile.html';}
else
{
window.location='http://2016.techkriti.org/profiles/profile1.html';
}
}
else
{
window.location='http://2016.techkriti.org/picke/form1.php';

}

 });
$('#start1').on('click',function(){
 if($.cookie("rollno")!=null)
{
 if($.cookie("pay")==0)
{

window.location='http://2016.techkriti.org/picke/profile.html';}
else
{
window.location='http://2016.techkriti.org/profiles/profile1.html';
}
}
else
{
window.location='http://2016.techkriti.org/picke/form1.php';

}

 });
var social=document.getElementById('social');
if(window.innerWidth<600){
    $(social).css('display','none');  
    $('.registers').css('display','none');
    $('#about .register').css('display','block');
} 

/****slideshow icon ***/
$(window).scroll(function() {
    var scrollTop = $(window).scrollTop(),
        divOffset = $('#slide-button').offset().top,
        divOffsetwrap = $('.wrap').offset().top,
        foot = $('#footer').offset().top,
        dist = (divOffset - scrollTop);
        dist1 = (divOffsetwrap - scrollTop);
        foot1 = (foot - scrollTop);
       if(dist1<653){
        $('#slide-button a').hide();
       }
       if(dist1>651){
        $('#slide-button a').show();
      }
    if(window.innerWidth<600){
        $('#city-imgs').css('display','none');
  
        if(foot1<678){
                 $(social).css('display','flex');  
     
         }
         else{
                 $(social).css('display','none');  
                $(social).addClass('social bottom');  

         }
    }
    
    var val;
    if($('body').innerHeight()-window.innerHeight + 750>9600){
        val=750;
    }
    else{
        val=550;
    }
     
      
    
    if(window.scrollY+window.innerHeight>=$('body').innerHeight()-window.innerHeight + val){
				social.setAttribute('class','social bottom');
				// goTo('contacts')
			}else{
				social.setAttribute('class','social');
			}    
 
    
});
 
      
var $animation_elements1 = $('.testimonials__odd');
var $animation_elements2 = $('.testimonials__even');
var $animation_elements3 = $('.prizes__content li');
var $animation_elements4 = $('#cities li');

var $window = $(window);
$window.on('scroll', check_if_in_view);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements1, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('fadeInRight animated');
    } else {
      $element.removeClass('fadeInRight animated');
    }
  });
   


$.each($animation_elements2, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('fadeInLeft animated');
    } else {
      $element.removeClass('fadeInLeft animated');
    }
  });

$.each($animation_elements3, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('zoomIn animated');
    } else {
      $element.removeClass('zoomIn animated');
    }
  });
 $.each($animation_elements4, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('zoomIn animated');
    } else {
      $element.removeClass('zoomIn animated');
    }
  });
}




    
/***FAQS***/
$('.ans').hide();
$('.ques').on('click',function(){
	var bg = $(this).css('background-image');
	console.log(bg.search('rarrow'));
	if(bg.search('rarrow') == -1){
	$(this).css('background-image','url(img/li-rarrow.png)');}
    else{	
   	$(this).css('background-image','url(img/li-arrow.png)');
    }
	$(this).siblings('.ques').css('background-image','url(img/li-arrow.png)');
    var next = $(this).next();
    $(this).next().slideToggle().siblings('li.ans').slideUp();    
});
   $(".cd-timeline-content").addClass("is-hid");
  $(".cd-timeline-img").hover(function(){
    $(this).parent().children(".cd-timeline-content").addClass("bounce-in").removeClass("is-hid");
    }, function(){
   //$(this).parent().children(".cd-timeline-content").addClass("is-hid").removeClass("bounce-in");
});
  $(".cd-date").hover(function(){
    $(this).parent().addClass("bounce-in").removeClass("is-hid");
    }, function(){
   //$(this).parent().children(".cd-timeline-content").addClass("is-hid").removeClass("bounce-in");
});
//      setInterval(next_slide,autoswitch_speed);

//City Slider
var counter=1;
var imgy=['KANPUR','MUMBAI','INDORE','UJJAIN','LUCKNOW1','NAGPUR','SIKAR','BHOPAL','BENGALURU','VARANASI','JAIPUR','PATNA','GWALIOR','DELHI','KOLKATA','RANCHI'];
var imgInterval = setInterval(next_city,3000);
function next_city(){
 $("#cities .grid img").fadeOut(500, function() {
        $("#cities .grid img").attr("src",'img/'+imgy[counter%16]+'.jpg');
    }).fadeIn(500);
counter=counter+1;
}


/*******Cities images change on hover********/
$('#city-hover li:not(".south_zone li")').hover(function(){
    clearInterval(imgInterval);
    
    var newImg = $(this).children('h3').text();
     if(newImg=="LUCKNOW")
{ newImg="LUCKNOW1";
}

    $('#cities .grid img').attr('src','img/'+newImg+'.jpg');
    for(s=0;s<11;s++)
   {if(imgy[s]==newImg)
      {counter=s;
}
    }
},function(){
    imgInterval = setInterval(next_city,3000);
});

/****Slide toggle procedure,important****/

$('button+p').hide();
$('button:not("#imp")').on('click',function(){
    $(this).parent().siblings().children('p').slideUp();
    $(this).parent().siblings().children('button').addClass('pulse animated').removeClass('color');
    $(this).next('p').slideToggle(); 
    $(this).toggleClass('pulse animated').toggleClass('color');
});

/*

/****************/

if (screen.width > 700) {
   $('#footer').removeClass('social bottom');
}    
    
if (screen.width < 959) {
    $('#navlist li a').on('click',function(){
    $('#navlist').addClass('btnclick');
})
}


$('button#nav__btn').click(function(){
    $('#navlist').toggleClass('btnclick')
});


/***for mobile***/
if (window.screen.width < 600) {
    $('#city-img').remove();
    $('#footer').html($(social).html());
    $('.social').css('position','relative');
    $('#social').remove();
    $('.contact li.box').css('width','100%');
        $('.cd-date').hide();
        $('.cd-timeline-content').css('marginBottom','3%');

$('#navlist').slideUp();
$('#navlist li').addClass('li-style');    
$('button#nav__btn').click(function(){
    $('#navlist').slideToggle();
});

}
//top slider


    var speed=500;
    var autoswitch = true;
    var autoswitch_speed = 4000;
    
    
    $('.container div:first').first().addClass('active');
    
    $('.container div:first').hide();
    
    $('.active').show();
    
    //next button
    $('.next').on('click',next_slide);
    
    //prev button
    $('.prev').on('click',function(){
      $('.active').removeClass('active').addClass('oldActive');
       if($('.oldActive').is(":first-child")){
          $('.container div').last().addClass('active');
       }
        else{
            $('.oldActive').prev().addClass('active');
        }
        $('.oldActive').removeClass('oldActive');
        $('.container div').fadeOut(speed);
        $('.active').fadeIn(speed);
    });
    
    //auto
    if(autoswitch==true){
        setInterval(next_slide,autoswitch_speed);
    }
    
    //next_slide
    function next_slide(){
      $('.active').removeClass('active').addClass('oldActive');
       if($('.oldActive').is(":last-child")){
          $('.container div').first().addClass('active');
       }
        else{
            $('.oldActive').next().addClass('active');
        }
        $('.oldActive').removeClass('oldActive');
        $('.container div').fadeOut(speed);
        $('.active').fadeIn(speed);
    }
});

//var currentIndex = 0,
//  items = $('.container div'),
//  item1 = $('.container div:first')
//    itemAmt = items.length;
//
//items.hide();
//item1.show().add("display","inline-block");
//
//
//function cycleItems() {
//  var item =$('.container div').eq(currentIndex);
//  items.hide();
//  item.show();
//}
//
//var autoSlide = setInterval(function() {
//  currentIndex += 1;
//  if (currentIndex > itemAmt - 1) {
//    currentIndex = 0;
//  }
//  cycleItems();
//}, 3000);

var lastId,
 topMenu = $("#navlist"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }                   
});
$("a:not('#start1,#start div a')").click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});




$(window).scroll(function(){
var height = $(window).scrollTop();
var h = window.innerHeight;
var about = $(".grid .box").offset().top;
var prizes = $(".prizes__content").offset().top;
var faqs = $(".faqs").offset().top;
var details = $(".details").offset().top;
var testi_odd = $(".testimonials__odd").offset().top;
var testi_even = $(".testimonials__even").offset().top;


var cities = $("#cities li").offset().top;
   
if(height<h){
    $(".grid .box").addClass('fadeInLeft animated');
    }
    if(prizes-height<=800){
    $(".prizes__content li").addClass('zoomIn animated'); 
    $(".grid .box:not('#selection .details')").removeClass('fadeInLeft animated');
    }  
    if(details-height<=870){
    $(".details .box:not('#selection .details')").addClass('fadeInRight animated');
    $(".prizes__content").removeClass('zoomIn animated'); 

    }
    if(testi_odd-height<=980){
    $(".testimonials__odd").addClass('fadeInRight animated');
    $(".details").removeClass('fadeInRight animated');
    }
	
	

    if(testi_even-height<=1000){
    $(".testimonials__even").addClass('fadeInLeft animated');
    }
	
	
	 if(cities-height<=750){
      $("#cities li").addClass('zoomIn animated');

	
    
    }  

	
    
	
	
	
});

    $("#cities li").removeClass('zoomIn animated');




//animations
/**

$(window).scroll(function() {
var about = $(".grid .box").offset().top-$(window).scrollTop();
var aboutw = $(".grid .box").width();

var image = $(".prizes__content .box").offset().top-$(window).scrollTop();
var height = $(window).height();
var testimonials = $(".testimonials__odd").offset().top-$(window).scrollTop();
var cities = $("li.box").offset().top-$(window).scrollTop();

    if(about<height) {
    $(".grid .box").addClass('fadeInLeft animated');
    }
    
     if(image+about<height){
    $(".prizes__content .box").addClass('zoomIn animated');    
    $(".grid .box").removeClass('fadeInLeft animated');

    }
    if(testimonials>=0) {
    $(".testimonials__odd").addClass('fadeInRight animated');
    $(".testimonials__even").addClass('fadeInLeft animated');
    $(".prizes__content .box").removeClass('zoomIn animated');
    }
    if(about+image+testimonials+cities<height) {
    $(".testimonials__odd").removeClass('fadeInRight animated');
    $(".testimonials__even").removeClass('fadeInLeft animated');
    $("li.box").addClass('zoomIn animated');
    }
});
**/

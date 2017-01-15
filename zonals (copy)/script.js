$(document).ready(function() {
  alert('ready');
$('a.live').on('click',function(){
  $('.iotC,.androidC,.flyingC,.ethicalC,.sixthC').css('display','block');
   if($(this).attr('data-city') == 'DEHRADUN'){
    console.log('yes');
    $('.iotC,.androidC').css('display','none');
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'BILASPUR'){
    console.log('yes');
   }
   if($(this).attr('data-city') == 'PUNE'){
    console.log('yes');
    $('.iotC,.androidC,.flyingC').css('display','none');
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'BHUBHANESHWAR'){
    
    $('.iotC,.ethicalC,.flyingC').css('display','none');
    $('.sixthC,.sixthC1').addClass('active');
   }
   if($(this).attr('data-city') == 'ALLAHABAD'){
    console.log('yes');
    $('.sixthC,.flyingC,.iotC').css('display','none');
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'AHMEDABAD'){
    console.log('yes');
    $('.sixthC,.flyingC,.iotC').css('display','');
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'BANGALORE'){
    console.log('yes');
    $('.androidC,.flyingC,.iotC').hide();
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'RAIPUR'){
    console.log('yes');
    $('.sixthC,.flyingC,.androidC').hide();
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'INDORE'){
    console.log('yes');
    $('.sixthC,.flyingC,.androidC').hide();
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'HYDERABAD'){
    console.log('yes');
    $('.sixthC,.flyingC,.iotC').hide();
    $('.ethicalC,.ethicalC1').addClass('active');
   }
   if($(this).attr('data-city') == 'JABALPUR'){
    console.log('yes');
    $('.sixthC,.flyingC,.iotC').hide();
    $('.ethicalC,.ethicalC1').addClass('active');
   }
});

$('.logo').hide();
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 250) {
    $('.logo').fadeIn();
  } else {
    $('.logo').fadeOut();
  }
});
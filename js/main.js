jQuery(function($){
$(function(){$('#main-slider.carousel').carousel({interval:8000});});$('.centered').each(function(e){$(this).css('margin-top',($('#main-slider').height()- $(this).height())/2);
});});
$('ul a[href^="#"]').click(function(){
var target = $(this).attr('href');
$('html, body').animate({scrollTop: $(target).offset().top}, 800);
return false;
});
$(document).ready(function() {
 $('#myCarousel').carousel({
 interval: 10000
 })
});
  $(window).on("scroll", function() { 
      	var scro= $(window).scrollTop();            
        var scr=0; 		
        var scr2=488; 	
        var scr3=935;	
        var scr4=1519;	
        var scr5=2021;	
    if ( $(window).scrollTop() >= scr && scro <= scr2 ) {	$('#m1').addClass('active');}
     else $('#m1').removeClass('active');
  if ( scro > scr2 && scro <= scr3 ) { 	$('#m2').addClass('active');}
     else $('#m2').removeClass('active');
    if ( scro > scr3 && scro <= scr4 ) {   	$('#m3').addClass('active');}
     else $('#m3').removeClass('active');
  if ( scro > scr4 && scro <= scr5 ) {   	$('#m4').addClass('active');}
     else $('#m4').removeClass('active');
  if ( scro > scr5 ) {  	$('#m5').addClass('active');}
     else $('#m5').removeClass('active');
    });
    
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                    $("#to-top").click(function(){
$("body").animate({"scrollTop":0},800);
});
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
  $("#m1").click(function(){
$("body").animate({"scrollTop":0},800);
}); 
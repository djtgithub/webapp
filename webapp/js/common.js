 

$('.tab>li').each(function(index){

	$(this).click(function(){
		$('.tab>li:eq('+index+')>a').addClass('active').parent().siblings().find('a').removeClass('active')
	})
})

var h=$(window).height();
$('.if').css('height',h)


$('.home').click(function(){
 
window.location.href="index.html"


})

$('.faxian').click(function(){
   
 
  $('.if').attr('src','faxian.html');

})
$('.dongtai').click(function(){
 
  $('.if').attr('src','dongtai.html')

})
$('.gouwuche').click(function(){
   
  
  $('.if').attr('src','gouwuche.html')

})
$('.wode').click(function(){
   
  
  // $('.if').attr('src','wode.html')
  window.location.href="wode.html"

})
$('.faxian').click(function(){
   
  
  // $('.if').attr('src','wode.html')
  window.location.href="faxian.html"

})
$('.dongtai').click(function(){
   
  
  // $('.if').attr('src','wode.html')
  window.location.href="dongtai.html"

})
$('.gouwuche').click(function(){
   
  
  // $('.if').attr('src','wode.html')
  window.location.href="gouwuche.html"

})


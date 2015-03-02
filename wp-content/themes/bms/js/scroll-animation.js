
jQuery(document).ready(function($){
   
  //hide boxex 
  $(".box").hide();

  //init scrolling event heandler
  $(document).scroll(function(){
   
    var docScroll = $(document).scrollTop(), 
        boxCntOfset = $(".box-container").offset().top - 300;
    
 
    //when rich top of boxex than fire
    if(docScroll >= boxCntOfset ) {

      $(".site-intro .inner-wrap").fadeIn(500)
    
    // } else {
    //  $(".site-intro .inner-wrap").fadeOut(200)
    
    }

    if(docScroll >= boxCntOfset ) {

      $(".intro-icon-wrap .inner-wrap").fadeIn(500)
    
    // } else {
    //  $(".site-intro .inner-wrap").fadeOut(200)
    
    }
  })   
});
  
  

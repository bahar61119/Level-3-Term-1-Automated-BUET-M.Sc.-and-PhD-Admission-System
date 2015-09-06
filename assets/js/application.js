// NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
// IT'S ALL JUST JUNK FOR OUR DOCS!
// ++++++++++++++++++++++++++++++++++++++++++

!function ($) {

  $(function(){

    var $window = $(window)

    
    setTimeout(function () {
      $('.nav').affix({
        offset: {
          top: function () { return $window.width() <= 0}
        
        }
      })
    }, 100)
    
   


   

   
  })


}(window.jQuery)

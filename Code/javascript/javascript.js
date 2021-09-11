

/*
function Scroll(){
var top = document.getElementById('sitename');
var ypos = window.pageYOffset;
if(ypos > 40) {
  top.style.opacity = "0.3";
}
else{
  top.style.opacity = "1";
  }
}
  window.addEventListener("scroll",Scroll);

            
$(function() {
                
                var documentEl = $(document),
                    fadeElem = $('.Container-1');
                
                
                documentEl.on('scroll', function() {
                    var currScrollPos = documentEl.scrollTop();
                    
                    fadeElem.each(function() {
                        var $this = $(this),
                            elemOffsetTop = $this.offset().top;
                        if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos-elemOffsetTop)/200);
                    }); 
                });
                
            });
*/
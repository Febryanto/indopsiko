$(document).ready(function(){
    $(".counter-count").each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    var wow = new WOW(
        {
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null,    // optional scroll container selector, otherwise use window,
          resetAnimation: true,     // reset animation on end (default is true)
        }
      );
      wow.init();
        
        var scroll_start = 0;
        var startchange = $('#tentang');
        var offset = startchange.offset();

        if(startchange.length){
          $(document).scroll(function(){
            scroll_start = $(this).scrollTop();

          if(scroll_start>offset.top){
          $('.navbar-custom').css('background-color', '#2AEEC7');
          }else{
            $('.navbar-custom').css('background-color','rgba(0 , 64 , 123 , 0.3)');
          }
        })
      }      
      $('.pop').click(function() {
        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');   
      });		

    });
    
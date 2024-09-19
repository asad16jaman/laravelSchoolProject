
(function ($) {
  "use strict";  

  $(document).ready(function () {  
/*==== header Section Start here =====*/
document.querySelector(".bar i").addEventListener("click", function () {
  let bar = document.querySelector(".bar i");
  bar.classList.toggle("fa-times");
  let target = document.querySelector(".target");
  target.classList.toggle("open");
});

 /*==== header Section Start here =====*/
 $("ul>li>ul").parent("li").addClass("menu-item-has-children");
 // drop down menu width overflow problem fix
 $('ul').parent('li').on('hover', function () {
     var menu = $(this).find("ul");
     var menupos = $(menu).offset();
     if (menupos.left + menu.width() > $(window).width()) {
         var newpos = -$(menu).width();
         menu.css({
             left: newpos
         });
     }
 });
 $('.header__nav li a').on('click', function (e) {
     var element = $(this).parent('li');
     if (screen.width < 1200) {
         if (element.hasClass('open')) {
             element.removeClass('open');
             element.find('li').removeClass('open');
             element.find('ul').slideUp(300, "swing");
         } else {
             element.addClass('open');
             element.children('ul').slideDown(300, "swing");
             element.siblings('li').children('ul').slideUp(300, "swing");
             element.siblings('li').removeClass('open');
             element.siblings('li').find('li').removeClass('open');
             element.siblings('li').find('ul').slideUp(300, "swing");
         }
     }
 })
    
 //Header    
var fixed_top = $(".header__bottom");
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 100) {
        fixed_top.addClass("header-fixed animated fadeInDown");
    } else {
        fixed_top.removeClass("header-fixed animated fadeInDown");
    }
});


//Odometer
$(".odometer").each(function () {
  $(this).isInViewport(function (status) {
    if (status === "entered") {
      for (
        var i = 0; i < document.querySelectorAll(".odometer").length; i++
      ) {
        var el = document.querySelectorAll(".odometer")[i];
        el.innerHTML = el.getAttribute("data-odometer-final");
      }
    }
  });
});

// our service section start here
var swiper = new Swiper(".service__slider", {
  spaceBetween: 24,
  loop: true, 
  freeMode: true,
  watchSlidesProgress: true, 
  pagination: {
    el: ".service__pagination",
    type: "fraction",
  },
  breakpoints: {
    1366: {
        slidesPerView: 2,        
    },
    992: {
      slidesPerView: 3,      
    },   
    576: {
      slidesPerView: 2,      
    },
    
  },
  autoplay: {
    delay: 4000,
  },
});


// our project section start here
var swiper = new Swiper(".project__slider", {
  spaceBetween: 24,
  loop: true,    
  grabCursor: true,
  centeredSlides: true,
  freeMode: true,
  watchSlidesProgress: true,  
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {       
    576: {
      slidesPerView: 2,      
      },
    
  },

  autoplay: {
    delay: 5000,
  },
});


// team  here
var swiper = new Swiper(".team__slider", {
  spaceBetween: 24,
  loop: true,  
  freeMode: true,
  watchSlidesProgress: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
  },
    breakpoints: {
    768: {
        slidesPerView: 2,
        
    },
    0: {
      slidesPerView: 1,      
      },    
    
  },
});



// testmonial 3 start here
var swiper = new Swiper(".testmonial3__slider", {
  spaceBetween: 24,
  loop: true,  
  freeMode: true,
  watchSlidesProgress: true,  
  breakpoints: {
    992: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    }, 
    0: {
      slidesPerView: 1,
    },
  },
  // autoplay: {
  //   delay: 2000,
  //   disableOnInteraction: false,
  //     reverseDirection: true,
  // },
});



// case section start here
var swiper = new Swiper(".case__slider", {
  spaceBetween: 24,
  loop: true, 
  freeMode: true,
  watchSlidesProgress: true,  
  navigation: {
    nextEl: ".case__next",
    prevEl: ".case__pre",
  },
  breakpoints: {
    1366: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 3,
    }, 
    576: {
      slidesPerView: 2,
    },
  },
  autoplay: {
    delay: 5000,
  },
});


// service section start here 2
var swiper = new Swiper(".service__slider2", {
  spaceBetween: 24,
  loop: true, 
  freeMode: true,
  watchSlidesProgress: true,  
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1366: {
      slidesPerView: 3,
    },    
    768: {
      slidesPerView: 2,
    },
  },
  autoplay: {
    delay: 5000,
  },
});

   
// cusotomer
var swiper = new Swiper(".testmonial__slider", {
  direction: "vertical",
  slidesPerView: 1,
  paginationClickable: true,
  spaceBetween: 0,
  mousewheelControl: true,
  loop: true,
  height: 180,
  autoHeight: true,
  speed: 700,
  pagination: {
    el: ".testmonial__pagination",
    clickable: true,
  },
  breakpoints: {
    1200: {
      height: 424,
    },
    992: {
      height: 290,
    },
    480: {
      height:380,
    },
    300: {
      height: 400,
    },
  },
  autoplay: {
    delay: 3000,
  },
});

    

// testimonial2 section start here
var swiper = new Swiper(".testmonial2__slider", {
  spaceBetween: 0,
  loop: true,  
  freeMode: true,
  watchSlidesProgress: true,  
  navigation: {
    nextEl: ".testmonial__next",
    prevEl: ".testmonial__pre",
  },
  breakpoints: {
    1200: {
      slidesPerView: 1,
    },    
    
  },
  autoplay: {
    delay: 4000,
  },
});


// project filter
var $grid = $(".project2__filteritem,.portfolio__filteritem, mascontent").isotope({
  transitionDuration: "0.9s",
});
// sort items on button click
$(".proitem").on("click", function () {
  var filterValue = $(this).attr("data-sort-by");
  $grid.isotope({ filter: filterValue });
});

$(".proitem, .item").click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});
   


 // Search option start here
 $(document).on("click", ".searchbtn, .closer", function () {
  $(".orginalsearch").toggleClass("active");
});

// scroll up start here

  $(function () {
    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $(".scrollToTop").css({
          bottom: "2%",
          opacity: "1",
          transition: "all .5s ease",
        });
      } else {
        $(".scrollToTop").css({
          bottom: "-30%",
          opacity: "0",
          transition: "all .5s ease",
        });
      }
    });
    //Click event to scroll to top
    $(".scrollToTop").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        500
      );
      return false;
    });
  });
       

    // lightcase 
    $('a[data-rel^=lightcase]').lightcase();

    // shop cart + - start here
      var CartPlusMinus = $('.cart-plus-minus');
       $(".qtybutton").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1 ;
                } else {
                    newVal = 1;
                }
            }
        $button.parent().find("input").val(newVal);
       });
    // products details start here
    var swiper = new Swiper(".productsdetails1", {
      loop: true,
      spaceBetween: 20,
      height: 553,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".productsdetails2", {
      loop: true,
      spaceBetween: 0,        
      thumbs: {
        swiper: swiper,
      },
    });

    
    //contact form js
    $(function () {
      var form = $('#contact-form');
      var formMessages = $('.form-message');
      $(form).submit(function (e) {
          e.preventDefault();
          var formData = $(form).serialize();
          $.ajax({
              type: 'POST',
              url: $(form).attr('action'),
              data: formData
          })
          .done(function (response) {
              $(formMessages).removeClass('error');
              $(formMessages).addClass('success');
              $(formMessages).text(response);
              $('#contact-form input, #contact-form textarea').val('');
          })
          .fail(function (data) {
              $(formMessages).removeClass('success');
              $(formMessages).addClass('error');
              if (data.responseText !== '') {
                  $(formMessages).text(data.responseText);
              } else {
                  $(formMessages).text('Oops! An error occured and your message could not be sent.');
              }
          });
      });
  });
   
    
  // text aniamtion
  var words = ['Real law', 'In New York','Advisors', 'Best Consult', 'Top Lawyers', 'Commercial Law', 'Ready To Answer'],  
  part,
  i = 0,
  offset = 0,
  len = words.length,
  forwards = true,
  skip_count = 0,
  skip_delay = 15,
  speed = 70;
  var wordflick = function () {
  setInterval(function () {
  if (forwards) {
    if (offset >= words[i].length) {
      ++skip_count;
      if (skip_count == skip_delay) {
        forwards = false;
        skip_count = 0;
      }
    }
  }
  else {
    if (offset == 0) {
      forwards = true;
      i++;
      offset = 0;
      if (i >= len) {
        i = 0;
      }
    }
  }
  part = words[i].substr(0, offset);
  if (skip_count == 0) {
    if (forwards) {
      offset++;
    }
    else {
      offset--;
    }
  }
  $('.word').text(part);
  },speed);
  };

  $(document).ready(function () {
    wordflick();
  });   

  // wow animation
  new WOW().init(); 
  
});
}(jQuery));


// Preloader Js
$(window).on('load', function () {
  $('.overlayer').fadeOut(1000);
});

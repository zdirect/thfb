$(document).ready(function() {

  $('.home-slider').slick({
    slidesToScroll: 1,
    arrows:false,
    autoplay: true,
    autoplaySpeed: 3000,
  });

  $('.single-item-img').slick({
    slidesToScroll: 1,
    dots:true,
  });

  $('#slider-home-mobile').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 1,
          centerPadding: '30px',
        }
      },
      {
        breakpoint: 350,
        settings: {
          slidesToShow: 1,
          centerPadding: '15px',
        }
      }
    ]
  });

  $('.news-home-slider').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.story-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    adaptiveHeight: true,
    asNavFor: '.story-nav'
  });
  $('.story-nav').slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    asNavFor: '.story-for',
    centerMode: true,
    centerPadding: '0px',
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      }
    ]
  });

  $('.popup-form input[type=checkbox]').click(function(){
    if (this.checked){
      $('.popup-form button').attr('disabled',false);
    }
    else{
      $('.popup-form button').attr('disabled',true);
    }
  });

  $('.modalbox').fancybox({
    touch:false
  });
    
   $('.anchor a').bind("click", function(e){
    var anchor = $(this);
    $('html, body').stop().animate({
    scrollTop: $(anchor.attr('href')).offset().top-60
    }, 1000);
    e.preventDefault();
  });

  var $menu = $("#menu");
   $(window).scroll(function(){
     if ( $(this).scrollTop() > 100 && $menu.hasClass("default-menu") ){
       $menu.fadeOut(0,function(){
         $(this).removeClass("default-menu")
              .addClass("fixed-menu transbg")
              .fadeIn(0);
       });
     } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed-menu")) {
       $menu.fadeOut(0,function(){
         $(this).removeClass("fixed-menu transbg")
              .addClass("default-menu")
              .fadeIn(0);
       });
     }
   });

   $('.close-menu').click(function(){
    $('.mobile-menu').fadeOut();
   });

   $('.input-file').each(function() {
    var $input = $(this),
      $label = $input.next('.js-labelFile'),
      labelVal = $label.html();
     
   $input.on('change', function(element) {
      var fileName = '';
      if (element.target.value) fileName = element.target.value.split('\\').pop();
      fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
   });
    });

    $(function(){
      $('.colapse-menu-button .c-hamburger').on('click',function(){
        $('.mobile-menu').slideToggle();
      });
  });

$(".send-form-file").each(function(){
  var it = $(this);

  it.validate({  
      ignore: ".ignore",
       rules: {                                      
          name: { required: true }, 
          phone: { required: true },
          email: { required: true },
          hiddenRecaptcha: {
            required: function () {
                var response = grecaptcha.getResponse();
                if (response.length == 0) {
                    return true;
                } else {
                    return false;
                }
            },
        },
      },
      errorPlacement: function(error, element) {

      },
      submitHandler: function(form) {
      var thisForm =$(form);
      var form_data = new FormData($('form')[0]);
        
      $.ajax({
          type: "POST",
          url: thisForm.attr('action'),
          data: form_data,
          processData: false,
          contentType: false,
          success: function success(response) {
            if(response.success){
              $(this).find("input").val("");
              $.fancybox.close();
              $.fancybox.open([
                      {
                          src : '#thanks'
                      }
                  ], {
                      padding : 0
              });               
              setTimeout(function() {
                  $.fancybox.close();
              }, 3000); 
            }
            else{
              
            }
          }
      })
      },
      success: function() {
     
      },        
      highlight: function(element, errorClass) {
          $(element).addClass('error');
      },
      unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('error');            
      }
      });
  });
 $(".send-form").each(function(){
  var it = $(this);

  it.validate({  
      ignore: ".ignore",
       rules: {                                      
          name: { required: true }, 
          phone: { required: true },
          email: { required: true },
          hiddenRecaptcha: {
            required: function () {
                var response = grecaptcha.getResponse();
                if (response.length == 0) {
                    return true;
                } else {
                    return false;
                }
            },
        },
      },
      errorPlacement: function(error, element) {

      },
      submitHandler: function(form) {
      var thisForm =$(form);
      var form_data = new FormData($('form')[0]);
        
      $.ajax({
          type: "POST",
          url: thisForm.attr('action'),
          data: form_data,
          processData: false,
          contentType: false,
          success: function success(response) {
            if(response.success){
              $(this).find("input").val("");
              $.fancybox.close();
              $.fancybox.open([
                      {
                          src : '#thanks'
                      }
                  ], {
                      padding : 0
              });               
              setTimeout(function() {
                  $.fancybox.close();
              }, 3000); 
            }
            else{
              
            }
          }
      })
      },
      success: function() {
     
      },        
      highlight: function(element, errorClass) {
          $(element).addClass('error');
      },
      unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('error');            
      }
      });
  });

  $('.send-form input[type=checkbox]').click(function(){
    if (this.checked){
      $('.send-form button').attr('disabled',false);
    }
    else{
       $('.send-form button').attr('disabled',true);
    }
  });

  var $menu = $("#menu");
   $(window).scroll(function(){
     if ( $(this).scrollTop() > 100 && $menu.hasClass("default-menu") ){
       $menu.fadeOut(0,function(){
         $(this).removeClass("default-menu")
              .addClass("fixed-menu transbg")
              .fadeIn(0);
       });
     } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed-menu")) {
       $menu.fadeOut(0,function(){
         $(this).removeClass("fixed-menu transbg")
              .addClass("default-menu")
              .fadeIn(0);
       });
     }
   });
    
});
$(window).on('load', function () {
  $("#cover").fadeOut(2000);
});
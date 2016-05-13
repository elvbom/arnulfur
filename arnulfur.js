$(window).scroll(
    {
        previousTop: 0
    }, 
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) { //scrollar upp
        if (currentTop > (0.95*$(window).height())) {
            var p = $("header").css("background-color", "rgba(54, 128, 191, 0.90)");
            var q = $("header").css("border-bottom", "solid 0.07em #FFFFFF");
        } else {
            var p = $("header").css("background-color", "rgba(54, 128, 191, 0)");
            var q = $("header").css("border", "none");
            $(".logo").slideDown();
        }
    } else { //scrollar ner
        if (currentTop > (0.95*$(window).height())) {
            var p = $("header").css("background-color", "rgba(54, 128, 191, 0.90)");
            var q = $("header").css("border-bottom", "solid 0.07em #FFFFFF");
        } else if (currentTop > (0.80*$(window).height())) {
            $(".logo").slideUp();
        }
    } 
    this.previousTop = currentTop;
});

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



// $(document).ready(function () {
//         $(document).on("scroll", onScroll);

//         $('a[href^="#"]').on('click', function (e) {
//             e.preventDefault();
//             $(document).off("scroll");

//             $('a').each(function () {
//                 $(this).removeClass('active');
//             })
//             $(this).addClass('active');

//             var target = this.hash;
//             $target = $(target);
//             $('html, body').stop().animate({
//                 'scrollTop': $target.offset().top+2
//             }, 500, 'swing', function () {
//                 window.location.hash = target;
//                 $(document).on("scroll", onScroll);
//             });
//         });
//     });

//     function onScroll(event){
//         var scrollPosition = $(document).scrollTop();
//         $('.headerlist a').each(function () {
//             var currentLink = $(this);
//             var refElement = $(currentLink.attr("href"));
//             if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
//                 $('.headerlist ul li a').removeClass("active");
//                 currentLink.addClass("active");
//             }
//             else{
//                 currentLink.removeClass("active");
//             }
//         });
//     }
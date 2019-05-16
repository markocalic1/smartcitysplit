/*!function(o){"use strict";o('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=o(this.hash);if((a=a.length?a:o("[name="+this.hash.slice(1)+"]")).length)return o("html, body").animate({scrollTop:a.offset().top-54},1e3,"easeInOutExpo"),!1}}),o(".js-scroll-trigger").click(function(){o(".navbar-collapse").collapse("hide")}),o("body").scrollspy({target:"#mainNav",offset:56});var a=function(){100<o("#mainNav").offset().top?o("#mainNav").addClass("navbar-shrink"):o("#mainNav").removeClass("navbar-shrink")};a(),o(window).scroll(a),o(".portfolio-modal").on("show.bs.modal",function(a){o(".navbar").addClass("d-none")}),o(".portfolio-modal").on("hidden.bs.modal",function(a){o(".navbar").removeClass("d-none")})}(jQuery);
!function(o){"use strict";o('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=o(this.hash);if((a=a.length?a:o("[name="+this.hash.slice(1)+"]")).length)return o("html, body").animate({scrollTop:a.offset().top-54},1e3,"easeInOutExpo"),!1}}),o(".js-scroll-trigger").click(function(){o(".navbar-collapse").collapse("hide")}),o("body").scrollspy({target:"#mainNav",offset:56});var a=function(){100<o("#mainNav").offset().top?o("#mainNav").addClass("navbar-shrink"):o("#mainNav").removeClass("navbar-shrink")};a(),o(window).scroll(a),o(".portfolio-modal").on("show.bs.modal",function(a){o(".navbar").addClass("d-none")}),o(".portfolio-modal").on("hidden.bs.modal",function(a){o(".navbar").removeClass("d-none")})}(jQuery);



// Sticky navbar
// =========================
$(document).ready(function () {
    // Custom function which toggles between sticky class (is-sticky)
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        }
        else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        // On page load
        stickyToggle(sticky, stickyWrapper, $(window));
    });
});
*/

(function($) {
    "use strict"; // Start of use strict
  
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 72)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
  
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 75
    });
  
    // Collapse Navbar
    var navbarCollapse = function() {
      if ($("#mainNav").offset().top > 100) {
        $("#mainNav").addClass("navbar-scrolled");
      } else {
        $("#mainNav").removeClass("navbar-scrolled");
      }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
  
    
  
  })(jQuery); // End of use strict
  
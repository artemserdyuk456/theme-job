jQuery(document).ready(function ($) {
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:3,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });
});



jQuery(document).ready(function ($) {
    (function() {

        "use strict";

        var toggles = document.querySelectorAll(".cmn-toggle-switch");

        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        };

        function toggleHandler(toggle) {
            toggle.addEventListener( "click", function(e) {
                e.preventDefault();
                (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
            });
        }

    })();
//funk VUPAD
    $('#menu_button').click(function () {
        $('.menu-nav-container').slideToggle(400, function () {});
    });
});

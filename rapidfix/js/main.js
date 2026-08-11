$(document).ready(function(){


    // SMOOTH SCROLLING
    $(document).ready(function(){$("a").on("click",function(a){if(""!==this.hash){a.preventDefault();var b=this.hash;$("html, body").animate({scrollTop:$(b).offset().top},800,function(){window.location.hash=b;});}});});


    // BOOTSTRAP SLIDER DURATION
    $('.carousel').carousel({
        interval: 4000
    });


    // MENU TOGGLE
    $("#toggle").click(function () {
        $("#menu").slideToggle("slow", function () {
            // Animation complete.
        });
    });


});

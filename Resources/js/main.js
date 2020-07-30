$(document).ready(function(){
    $("#form-button").click(function(e){
        var emailAddress1 = $("#emailAddress1").val();
        var emailAddress2 = $("#emailAddress2").val();
        var submitBtn = document.getElementById("form-button");
        var isValid = true;

        //VALIDATE FIRST EMAIL

        if (emailAddress1 == ""){
            $("#emailAddress1").next().text(" This field is required.");
            isValid = false;
        }

        else {
            $("#emailAddress1").next().text("");
        }

        //VALIDATE SECOND EMAIL

        if (emailAddress2 == ""){
            $("#emailAddress2").next().text(" This field is required.");
            isValid = false;
        }

        else if (emailAddress1 != emailAddress2){
            $('#emailAddress2').next().text(" Your email accounts don't match.");
            isValid = false;
        }

        else {
            $("#emailAddress2").next().text("");
        }

        //VALIDATE NAME

        if ($("#name").val() == ""){
            $("#name").next().text(" This field is required.");
            isValid = false;
        }

        else {
            $("#name").next().text("");

        }

        if (isValid === false) {
            e.preventDefault();
            //$("#contact-form").submit();
        }

    }); //END CLICK
}); //END READY

$(function () {

    //configuration
    var width = 500;
    var animationSpeed = 1500;
    var pause = 4500;
    var currentSlide = 1;
    var currentText = 0;

    //cache DOM
    var $slider = $('.slider');
    var $slideContainer = $slider.find('.slides');
    var $slides = $slideContainer.find('.slide');
    var $textContainer = $('.portfolio-text').first();

    var $textSlides = $('.project-slider-desc-textbox');
    $textSlides.not($textSlides.eq(0)).hide();

    var interval;

    function startSlider() {
        interval = setInterval(function () {
            $textSlides.eq(currentText).fadeOut(animationSpeed / 2, function () {
                console.log(currentText);
                $textSlides.eq(currentText).hide();

                currentText++;
                if (currentText === 3) {
                    currentText = 0;
                    console.log('current text reset: ', currentText);
                }
                $textSlides.eq(currentText).fadeIn(animationSpeed / 2);
            });
            // $textSlides.eq(currentText).fadeOut(animationSpeed / 2);
            // $textSlides.eq(currentText).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            //     currentText++;
            //     console.log(curr)
            //     $textSlides.eq(currentText).fadeIn(animationSpeed / 2);
            // });
            $slideContainer.animate({ 'margin-left': '-=' + width }, animationSpeed, function () {
                currentSlide++;
                if (currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);

                }
            });
        }, pause);
    }

    function stopSlider() {
        clearInterval(interval);
    }

    $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);
    $textContainer.on('mouseenter', stopSlider).on('mouseleave', startSlider);

    startSlider();
});

window.addEventListener('scroll', function(){
    
    let footerCopyright = document.querySelector('footer p');
    let footerNavBar = document.querySelector('footer .nav-list');
    let topNavBar = document.querySelector('.top-nav .nav-list');
    let navItem = document.querySelectorAll('.top-nav .nav-list li');

    const toggleFadeIn = () => {
        topNavBar.classList.remove('fadeUp')
        topNavBar.classList.add('fadeDown');
        navItem.forEach((element) => {
            element.classList.remove('fadeUp');
            element.classList.add('fadeDown')
        });
    };

    const toggleFadeOut = () => {
        topNavBar.classList.remove('fadeDown')
        topNavBar.classList.add('animate', 'fadeUp');
        navItem.forEach((element) => {
            element.classList.remove('fadeDown')
            element.classList.add('animate', 'fadeUp');
        });
    };

    topNavBar.classList.toggle('sticky', window.scrollY > 0);
    
    if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - (footerNavBar.offsetHeight + footerCopyright.offsetHeight))){
        toggleFadeOut();
    } else {
        toggleFadeIn();
    }
})
const swiper = new Swiper(".swiper-container", {
    freeMode: true,
    setWrapperSize: true,
    direction: "horizontal",
    slidesPerView: "auto",
    simulateTouch: false,
    resistance: true,
    resistanceRatio: 0,
    mousewheel: {
        sensitivity: 1
    },
    breakpoints: {
        767: {
            direction: "vertical"
        }
    }
});

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty("--vh", `${vh}px`);

// We listen to the resize event
window.addEventListener("resize", () => {
    swiper.update();
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
});
new jBox("Modal", {
    attach: ".button__to-order",
    title: "Заполните форму и мы свяжемся с вами",
    content:
        '<div class="modal__content"><form action="#" id="modal-form" method="post"><input type="text" id="input-name" name="name" placeholder="Имя"><input type="tel" id="input-tel" name="tel" placeholder="Телефон"><input type="submit" value="Отправить"></form></div>'
});

$("ready", () => {
    try {
        var decoration = document.getElementById("logo__decoration");
        var logLink = document.getElementById("logo__link");
        var preloader = document.getElementById("preloader");
        var openMenu = document.getElementById("menu-open");
        var menuEl = document.getElementById("menu");
        var closeMenu = document.getElementById("menu-close");
        var menuAn = new TimelineMax({ ease: SlowMo.ease.config(0.4, 0.6, false) });

        menuAn.to(menuEl, 1, { xPercent: -100, ease: SlowMo.ease.config(0.4, 0.6, false) });
        openMenu.addEventListener("click", function() {
            const that = $(this);
            if (that.hasClass("active")) {
                that.removeClass("active");
                return menuAn.to(menuEl, 1, { xPercent: -100, ease: Expo.easeOut });
            }
            that.addClass("active");

            return menuAn.to(menuEl, 1, { xPercent: 0, ease: Expo.easeOut });
        });

        closeMenu.addEventListener("click", function() {
            menuAn.to(menuEl, 1, { xPercent: -100, ease: SlowMo.ease.config(0.4, 0.6, false) });
        });

        // var tl = new TimelineMax({ repeat: 30, repeatDelay: 1 });
        var tl = new TimelineMax();
        var tpreloader = new TimelineMax();

        var onLoaded = function() {
            tpreloader.to(preloader, 1, { css: { scaleX: 0, xPercent: 100 }, onComplete: textAnimation });
        };
        tl.to(decoration, 1, { xPercent: 0 });
        tl.to(decoration, 1, { xPercent: 100 });
        tl.to(decoration, 0.1, { scaleX: 0 });
        tl.to(decoration, 0.1, { xPercent: -100 });
        tl.to(decoration, 1, { scaleX: 1 });
        tl.to(decoration, 1, { xPercent: 0 });

        $("load", () => {
            tl.to(decoration, 0.3, { css: { xPercent: 0 }, onComplete: onLoaded });
        });
    } catch (err) {
        if (err) {
            var preloader = document.getElementById("preloader");
            preloader.style.display = "none";
        }
    }

    var textAnimation = function() {
        const words = $(".ml12");
        const words1 = $("#hero-title");

        words.map((key, item) => {
            $(item).wrap('<i class="new"></i>');
            TweenLite.to(item, 0.1, { opacity: 1 });
            TweenLite.to(item, key / 3 + 0.5, { right: 0 });
        });
    };

    // Wrap every letter in a span

    $("load", function() {
        // $(".ml12").each(function() {
        //     $(this).html(
        //         $(this)
        //             .text()
        //             .replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>")
        //     );
        // });
        // anime.timeline({ loop: false }).add({
        //     targets: ".ml12 .letter",
        //     translateX: [0, 140],
        //     translateZ: 0,
        //     opacity: [0, 1],
        //     easing: "easeOutExpo",
        //     duration: 5000,
        //     delay: function(el, i) {
        //         return 2500 + 30 * i;
        //     }
        // });
    });
    // $(".ml12").each(function() {
    //     $(this).html(
    //         $(this)
    //             .text()
    //             .replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>")
    //     );
    // });

    // const textAnimation = function() {
    //     anime.timeline({ loop: false }).add({
    //         targets: ".ml12 .letter",
    //         translateX: [40, 0],
    //         translateZ: 0,
    //         opacity: [0, 1],
    //         easing: "easeOutExpo",
    //         duration: 800,
    //         delay: function(el, i) {
    //             return 500 + 30 * i;
    //         }
    //     });

    // anime.timeline({ loop: true }).add({
    //     targets: ".ml12 .letter",
    //     translateX: [40, 0],
    //     translateZ: 0,
    //     opacity: [0, 1],
    //     easing: "easeOutExpo",
    //     duration: 1200,
    //     delay: function(el, i) {
    //         return 500 + 30 * i;
    //     }
    // });
    // };
});

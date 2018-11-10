$("ready", () => {
    var textAnimation = function() {
        const words = $(".swiper-slide-active .ml12");

        if (!words.hasClass("activated")) {
            words.map((key, item) => {
                $(item).wrap('<span class="new"></span>');
                TweenLite.to(item, 0.1, { opacity: 1 });
                TweenLite.to(item, key / 3 + 0.5, { right: 0 });
            });
            words.addClass("activated");
        }
    };

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

    swiper.on("slideChange", function() {
        setTimeout(() => {
            textAnimation();
        }, 500);
    });
    swiper.on("slideNextTransitionStart", function() {
        console.log("Hey");
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
            '<div class="modal__content"><form action="#" id="modal-form" method="post"><input type="text" id="input-name" name="name" placeholder="Имя"><input type="tel" id="input-tel" name="tel" placeholder="Телефон"><input type="submit" value="Отправить"></form></div>',
        onCreated: function() {
            const inputName = $("#input-name");
            const inputTel = $("#input-tel");
            inputName.add(inputTel).on("input", e => {
                const target = e.target;
                const value = target && target.value;
                console.log("value", value);
                if (value && value.length > 0) {
                    return $(target).addClass("filled");
                }
                return $(target).removeClass("filled");
            });
        }
    });

    /**
     * Preloader
     */
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
            tpreloader.to(preloader, 1, { css: { scaleX: 0.5, xPercent: 60, opacity: 0 }, onComplete: textAnimation });
            tpreloader.to(preloader, 0.1, { css: { display: "none" } });
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
    // ============================================================
});

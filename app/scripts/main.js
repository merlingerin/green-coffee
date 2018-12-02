$('ready', () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    /**
     * SECTION 2 ANIMATIONS
     */
    var section2Animation = new TimelineMax({ repeat: 999999, ease: SlowMo.ease.config(0.4, 0.6, false) });
    // var imageTopAnimation = new TimelineMax({repeat: })
    var imageMan = document.querySelector('.image-man');
    var imageWoman = document.querySelector('.image-woman');
    var imageManTop = document.querySelector('.image-man-top');
    var imageManBottom = document.querySelector('.image-man-bottom');
    var imageWomanTop = document.querySelector('.image-woman-top');
    var imageWomanTop = document.querySelector('.image-woman-top');
    var imageDescription_1 = document.querySelector('.description--top');
    var imageDescription_2 = document.querySelector('.description--bottom');
    var note = document.querySelectorAll('.note');
    var imageDescriptionTextLines = document.querySelectorAll('.text-line');
    var imageDescription_3 = document.querySelector('.image-man .text-line-1');
    var imageDescription_5 = document.querySelector('.image-woman .text-line-1');
    var imageDescriptionLine2 = document.querySelectorAll('.text-line-2');
    var $ImageMan = $('.image-man');
    var $ImageWoman = $('.image-woman');
    section2Animation.to(note, 0, { opacity: 0, yPercent: -200 });
    section2Animation.to(imageDescriptionTextLines, 0, { width: 0, opacity: 0 });

    var addAnimationToImage = item => {
        if (!item) return;
        return $(item).addClass('inViewport');
    };
    // // ============================================================
    inViewport(imageWoman, item => {
        addAnimationToImage(item);
        addAnimationToImage(imageMan);

        section2Animation.to(
            imageDescription_1,
            1,
            {
                opacity: 1,
                yPercent: 0,
                onComplete: function() {
                    $ImageMan.addClass('animated');
                    $ImageWoman.addClass('animated');
                },
            },
            1,
        );
        section2Animation.to(imageDescription_3, 1, { width: '50%', opacity: 1 }, 2.5);
        section2Animation.to(imageDescription_5, 1, { width: '62%', opacity: 1 }, 2.5);
        section2Animation.to(
            imageDescription_2,
            1,
            {
                opacity: 1,
                yPercent: 0,
            },
            8,
        );
        section2Animation.to(
            imageDescriptionLine2,
            1,
            {
                width: '50%',
                opacity: 1,
                onComplete: function() {
                    $ImageMan.removeClass('animated');
                    $ImageWoman.removeClass('animated');
                    $ImageMan.addClass('animated-bottom');
                    $ImageWoman.addClass('animated-bottom');
                },
            },
            10,
        );
        section2Animation.to(
            imageDescriptionLine2,
            4,
            {
                onComplete: function() {
                    $ImageMan.removeClass('animated-bottom');
                    $ImageWoman.removeClass('animated-bottom');
                },
            },
            10,
        );
        // section2Animation.reverse(-15);
    });

    // ============================================================

    var textAnimation = function() {
        var words = $('.swiper-slide-active .ml12');
        var section = $('.swiper-slide-active');

        if (!section.hasClass('activated')) {
            words.map((key, item) => {
                $(item).wrap('<span class="new"></span>');
                TweenLite.to(item, key / 3 + 0.7, { right: 0, opacity: 1, rotationY: 0 });
            });
            section.addClass('activated');
        }
    };

    var winWidth = window.innerWidth;
    var winHeight = window.innerHeight;
    var aspectRation = winWidth / winHeight;

    window.mySwiper = new Swiper('#body-swiper', {
        freeMode: true,
        setWrapperSize: true,
        direction: 'horizontal',
        slidesPerView: 'auto',
        simulateTouch: false,
        resistance: true,
        resistanceRatio: 0,
        mousewheel: {
            sensitivity: 1,
        },
        breakpoints: {
            767: {
                direction: 'vertical',
            },
        },
    });
    window.mySwiper2 = new Swiper('#swiper-statistics', {
        freeMode: false,
        // setWrapperSize: true,
        direction: 'horizontal',
        slidesPerView: 1,
        simulateTouch: false,
        resistance: false,
        resistanceRatio: 0,
        loop: true,
        // effect: 'fade',
        speed: 1000,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slideActiveClass: 'swiper2-slide-active',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">0' + (index + 1) + '</span>';
            },
        },
    });

    window.mySwiper.on('slideChange', function() {
        setTimeout(() => {
            textAnimation();
        }, 500);
        mySwiper.update();
    });

    // We listen to the resize event
    window.addEventListener('resize', () => {
        window.mySwiper.update();
        // We execute the same script as before
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
        setTimeout(() => {
            window.mySwiper.update();
            window.mySwiper.update();
            window.mySwiper.update();
        }, 1000);
    });
    window.addEventListener('orientationchange', () => {
        window.mySwiper.update();

        setTimeout(() => {
            var currentWinWidth = window.innerWidth;

            if ((winWidth >= 768 && currentWinWidth < 768) || (winWidth < 768 && currentWinWidth >= 768)) {
                window.location.reload();
            }
            window.mySwiper.update();
            window.mySwiper.update();
            window.mySwiper.update();
        }, 1000);
    });

    new jBox('Modal', {
        attach: '.btn-order',
        title: 'Оформить заказ',
        content: $('#modal_to-order'),
        onCreated: function() {
            var inputName = $('#input-name');
            var inputTel = $('#input-tel');
            var inputEmail = $('#input-email');
            inputName
                .add(inputTel)
                .add(inputEmail)
                .on('input', e => {
                    var target = e.target;
                    var value = target && target.value;

                    if (value && value.length > 0) {
                        return $(target).addClass('filled');
                    }
                    return $(target).removeClass('filled');
                });
        },
        onClose: function() {
            $('#success-modal').removeClass('success');
            if (window.mySwiper) {
                mySwiper.update();
            }
        },
    });
    new jBox('Modal', {
        attach: '.btn-callback',
        title: 'Заполните форму и мы свяжемся с вами',
        content:
            '<div class="modal__content"><div class="modal__form"><input type="text" id="input-name" name="name" placeholder="Имя"><input type="tel" id="input-tel" name="tel" placeholder="Телефон"><input type="submit" value="Отправить"></div></div>',
        onCreated: function() {
            var inputName = $('#input-name');
            var inputTel = $('#input-tel');
            inputName.add(inputTel).on('input', e => {
                var target = e.target;
                var value = target && target.value;

                if (value && value.length > 0) {
                    return $(target).addClass('filled');
                }
                return $(target).removeClass('filled');
            });
        },
        onClose: function() {
            if (window.mySwiper) {
                mySwiper.update();
            }
        },
    });

    /**
     * Preloader
     */
    try {
        var decoration = document.getElementById('logo__decoration');
        var logLink = document.getElementById('logo__link');
        var preloader = document.getElementById('preloader');
        var openMenu = document.getElementById('menu-open');
        var menuEl = document.getElementById('menu');
        var closeMenu = document.getElementById('menu-close');
        var menuAn = new TimelineMax({ ease: SlowMo.ease.config(0.4, 0.6, false) });

        menuAn.to(menuEl, 1, { xPercent: -100, ease: SlowMo.ease.config(0.4, 0.6, false) });
        openMenu.addEventListener('click', function() {
            var that = $(this);
            if (that.hasClass('active')) {
                that.removeClass('active');
                window.mySwiper.mousewheel.enable();
                window.mySwiper.allowTouchMove = true;
                return menuAn.to(menuEl, 1, { xPercent: -100, ease: Expo.easeOut });
            }
            that.addClass('active');
            window.mySwiper.allowTouchMove = false;
            window.mySwiper.mousewheel.disable();
            return menuAn.to(menuEl, 1, { xPercent: 0, ease: Expo.easeOut });
        });

        closeMenu.addEventListener('click', function() {
            window.mySwiper.mousewheel.enable();
            window.mySwiper.allowTouchMove = true;
            menuAn.to(menuEl, 1, { xPercent: -100, ease: SlowMo.ease.config(0.4, 0.6, false) });
        });

        window.addEventListener('scroll', event => {
            e.preventDefault();
        });

        /**
        |--------------------------------------------------
        | MENU LOGIC
        |--------------------------------------------------
        */
        var menuItems = $('.menu__list li');
        menuItems.on('click', event => {
            var target = event.currentTarget;
            $(openMenu).removeClass('active');

            var index = $(target).index();
            switch (index) {
                case 0:
                    mySwiper.slideTo(index, 500);
                    return mySwiper.update();
                case 1:
                    mySwiper.slideTo(index, 500);
                    return mySwiper.update();
                case 2:
                    mySwiper.slideTo(4, 500);
                    return mySwiper.update();
                case 3:
                    mySwiper.slideTo(5, 500);
                    return mySwiper.update();
                case 4:
                    mySwiper.slideTo(6, 500);
                    return mySwiper.update();
            }
        });
        // ============================================================

        // var tl = new TimelineMax({ repeat: 30, repeatDelay: 1 });
        var tl = new TimelineMax();
        var tpreloader = new TimelineMax();

        var onLoaded = function() {
            tpreloader.to(preloader, 1, { css: { scaleX: 0.5, xPercent: 60, opacity: 0 }, onComplete: textAnimation });
            tpreloader.to(preloader, 0.1, { css: { display: 'none' } });
        };
        tl.to(decoration, 1, { xPercent: 0 });
        tl.to(decoration, 1, { xPercent: 100 });
        tl.to(decoration, 0.1, { scaleX: 0 });
        tl.to(decoration, 0.1, { xPercent: -100 });
        tl.to(decoration, 1, { scaleX: 1 });
        tl.to(decoration, 1, { xPercent: 0 });

        $('load', () => {
            tl.to(decoration, 0.3, { css: { xPercent: 0 }, onComplete: onLoaded });
        });
    } catch (err) {
        if (err) {
            var preloader = document.getElementById('preloader');
            preloader.style.display = 'none';
        }
    }
    // ============================================================

    /**
    |--------------------------------------------------
    | CARD ANIMATION
    |--------------------------------------------------
    */
    var card = $('.card');

    if (winWidth < 768) {
        card.on('click', event => {
            var target = $(event.currentTarget);
            $('.card.active')
                .not(target)
                .removeClass('active');

            if (!target.hasClass('active')) {
                var elem = $(event.currentTarget).children('.card__image');
                var image = elem.children('img');
                var imageWidth = image.width();
                TweenLite.to(elem, 0.5, { width: `${imageWidth}px` });
                target.addClass('active');
                mySwiper.update();
            } else {
                var elem = $(event.currentTarget).children('.card__image');

                TweenLite.to(elem, 0.5, { width: `0px` });
                target.removeClass('active');
                mySwiper.update();
            }
        });
    } else {
        card.on('mouseenter', event => {
            var target = $(event.currentTarget);

            if (!target.hasClass('active')) {
                var elem = $(event.currentTarget).children('.card__image');
                var image = elem.children('img');
                var imageWidth = image.width();

                TweenLite.to(elem, 0.5, { width: `${imageWidth}px` });
                target.addClass('active');
                mySwiper.update();
            }
        });

        card.on('mouseleave', event => {
            var target = $(event.currentTarget);
            target.removeClass('active');
            var elem = $(event.currentTarget).children('.card__image');

            TweenLite.to(elem, 0.5, { width: `0px` });
            mySwiper.update();
        });
    }
    var modal_to_order = () => {
        /**
        |--------------------------------------------------
        | FORM INPUTS
        |--------------------------------------------------
        */
        var inputName = $('#input-name');
        var inputTel = $('#input-tel');
        var inputEmail = $('#input-email');
        // ============================================================

        var button_inc = $('.buttons__button-inc');
        var button_dec = $('.buttons__button-dec');
        var priceCounter = $('#order-count');
        var totalPrice = $('.form-calculator__total-price .price__value');
        var submitButton = $('#to_order-button');
        var isSending = false;
        var pricePerOnce = 1200;
        priceCounterValue = parseInt(priceCounter.text());
        totalPrice.text(pricePerOnce * priceCounterValue);

        submitButton.on('submit', function(e) {
            e.preventDefault();
        });

        submitButton.on('click', function(e) {
            console.log('work 2');

            isSending = true;
            var formData = {
                name: inputName.val(),
                phone: inputTel.val(),
                email: inputEmail.val(),
                value: priceCounter.text(),
                totalPrice: totalPrice.text(),
            };
            $.ajax({
                type: 'POST',
                url: 'http://localhost:8888/test/',
                data: formData,
                success: function() {
                    $('#success-modal').addClass('success');
                    console.log('Success');
                    var element = document.querySelector('#success-modal');

                    successEmail(element);
                },
                error: function() {
                    $('#modal-form').addClass('error');
                },
            });
        });

        button_dec.on('click', () => {
            priceCounterValue = parseInt(priceCounter.text());
            if (priceCounterValue === 0) {
                return false;
            }
            totalPrice.text(pricePerOnce * (priceCounterValue - 1));
            return priceCounter.text(--priceCounterValue);
        });
        button_inc.on('click', () => {
            priceCounterValue = parseInt(priceCounter.text());
            if (priceCounterValue === 9999) {
                return false;
            }
            totalPrice.text(pricePerOnce * (1 + priceCounterValue));

            return priceCounter.text(++priceCounterValue);
        });
    };
    modal_to_order();
    var successEmail = function(el) {
        return lottie.loadAnimation({
            container: el, // the dom element that will contain the animation
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: '../images/check_animation.json', // the path to the animation json
        });
    };
});

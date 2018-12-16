<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Green Coffee</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <meta name="viewport" content="height=device-height, initial-scale=1"> -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
            integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="./styles/swiper.css">
        <link rel="stylesheet" href="./styles/styles.css" />
        <link rel="stylesheet" href="./scripts/jbox/jBox.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

        <script src="./scripts/swiper/swiper.min.js"></script>

        <script src="./scripts/jbox/jBox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
    </head>
    <?php
    if ($_GET['utm_source']=='google' && $_GET['utm_medium']=='cpc' &&
    $_GET['utm_campaign']=='aud1')
    {
             $tel='0800-GOOGLE-CO.';
    }
    elseif ($_GET['utm_source']=='facebook' && $_GET['utm_medium']=='cpc' &&
    $_GET['utm_campaign']=='aud2')
    {
             $tel='0800-FACEBOOK-CO.';
    }
    else
    {
             $tel='0800-STANDART-NUMBER.';
    }

    ?>
    <body>
              <!-- Google Tag Manager -->

              <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

                })(window,document,'script','dataLayer','GTM-KHR5Z83');</script>

                <!-- End Google Tag Manager -->

        <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHR5Z83"

    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->
        <!-- Slider main container -->
        <div id="preloader" class="preloader">
            <div class="preloader-body">
                <div id="logo__link" class="logo__link">
                    <span id="logo__decoration" class="logo__decoration logo__decoration--before"></span>
                </div>
            </div>
        </div>

        <div class="header">
                <div id="menu" class="menu">
                    <div class="menu__header">
                        <div class="logo">
                            <a href="/green-coffee-polyphenol" class="logo__link"></a>
                            <span class="logo__text">Healthy Nutrition</span>
                        </div>
                    </div>
                    <div id="menu-close" class="menu__content">
                        <ul class="menu__list">
                            <li class="list__item"><a class="title_2" href="javascript:void(0)">ГОЛОВНА</a></li>
                            <li class="list__item"><a class="title_2" href="javascript:void(0)">GREEN COFFEE POLYPHENOL</a></li>
                            <li class="list__item"><a class="title_2" href="javascript:void(0)">КЛІНІЧНІ ВИПРОБУВАННЯ</a></li>
                            <li class="list__item"><a class="title_2" href="javascript:void(0)">ГОЛОВНІ ОСОБЛИВОСТІ</a></li>
                            <li class="list__item"><a class="title_2" href="javascript:void(0)">ЗАДАТИ ПИТАННЯ</a></li>
                            <li class="list__item"><a class="title_2" href="javascript:void(0)">КОНТАКТИ</a></li>
                        </ul>
                    </div>
                </div>
                <div id="logo" class="logo">
                    <a href="/green-coffee-polyphenol" class="logo__link"></a>
                    <span class="logo__text">Healthy Nutrition</span>
                </div>
                <a href="#" class="button  button__to-order btn-order button--green"><span class="button__text">замовити</span></a>
                <a href="https://www.facebook.com/tobeplus.com.ua" target="_blank" title="facebook" class="facebook-link"><i class="facebook-link__icon fab fa-facebook-f"></i></a>
                <?php echo'<a href="tel:' .  $tel . '" class="tel-number"><span class="tel-number__text">' . $tel . '</span></a>' ?>

                <div id="menu-open" class="menu-button">
                    <span class="menu-button__text">Menu</span>
                    <div class="burger-button">
                        <i class="burger-button__item"></i> <i class="burger-button__item"></i>
                        <i class="burger-button__item"></i> <i class="burger-button__item"></i>
                        <i class="burger-button__item"></i>
                    </div>
                </div>
                <div class="languages"><a href="/green-coffee-polyphenol" title="ua" class="lang">УКР</a><a href="/green-coffee-polyphenol/ru" title="ru" class="lang">РУС</a></div>
            </div>
        <div id="body-swiper" class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- div.icon-burgeer>. -->
                <!-- Section #1 -->
                <section class=" swiper-slide section_1">
                    <div class="container">
                        <!-- <div class="header">
                            <div id="menu" class="menu">
                                <div class="menu__header">
                                    <div class="logo">
                                        <a href="/" class="logo__link"></a>
                                        <span class="logo__text">Healthy Nutrition</span>
                                    </div>
                                </div>
                                <div id="menu-close" class="menu__content">
                                    <ul class="menu__list">
                                        <li class="list__item"><a class="title_2" href="javascript:void(0)">ГОЛОВНА</a></li>
                                        <li class="list__item"><a class="title_2" href="javascript:void(0)">GREEN COFFEE POLYPHENOL</a></li>
                                        <li class="list__item"><a class="title_2" href="javascript:void(0)">КЛІНІЧНІ ВИПРОБУВАННЯ</a></li>
                                        <li class="list__item"><a class="title_2" href="javascript:void(0)">ГОЛОВНІ ОСОБЛИВОСТІ</a></li>
                                        <li class="list__item"><a class="title_2" href="javascript:void(0)">ЗАДАТИ ПИТАННЯ</a></li>
                                        <li class="list__item"><a class="title_2" href="javascript:void(0)">КОНТАКТИ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="logo">
                                <a href="/" class="logo__link"></a>
                                <span class="logo__text">Healthy Nutrition</span>
                            </div>
                            <a href="#" class="button  button__to-order btn-order button--green"><span class="button__text">замовити</span></a>
                            <a href="#" class="facebook-link"><i class="facebook-link__icon fab fa-facebook-f"></i></a>
                            <a href="tel:+380445375280" class="tel-number"><span class="tel-number__text">0 800 60 77 87</span></a>

                            <div id="menu-open" class="menu-button">
                                <span class="menu-button__text">Menu</span>
                                <div class="burger-button">
                                    <i class="burger-button__item"></i> <i class="burger-button__item"></i>
                                    <i class="burger-button__item"></i> <i class="burger-button__item"></i>
                                    <i class="burger-button__item"></i>
                                </div>
                            </div>
                        </div> -->
                        <div class="hero">
                            <h1 id="hero-title" class="hero__title title_1 ">
                                <span class="ml12">ВІДЧУЙТЕ</span><br />
                                <span class="ml12">ЛЕГКІСТЬ</span><br />
                                <p class="title_3 ml12"><span class="ml12">Програма зниження ваги </span><br /><span class="ml12">з активними антиоксидантами</span></span></p>
                            </h1>
                            <div class="scroll-page">
                                <span class="scroll-text">SCROLL</span>
                                <svg
                                    class="scroll-icon"
                                    width="24"
                                    height="24"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                >
                                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                </svg>
                                <!--
                                    <span class="scroll-icon"
                                        >
                                    </span>
                                -->
                            </div>
                        </div>
                        <div class="sidebar">
                            <div class="card card--1">
                                <p class="card__number">01</p>
                                <p class="card__description paragraph_2">Клінічно досліджений результат</p>
                            </div>
                            <div class="card card--2">
                                <p class="card__number">02</p>
                                <p class="card__description paragraph_2">Натуральний екстракт зеленої кави</p>
                            </div>
                            <div class="card card--3">
                                <p class="card__number">03</p>
                                <p class="card__description paragraph_2">Антиоксидантна антиейджинг профілактика</p>
                            </div>
                            <i class="image--bottle" ></i>
                        </div>
                    </div>
                </section>
                <!-- Section #2 -->
                <section class="swiper-slide section_2">
                    <div class="container">
                        <div class="section_2__left-side">
                            <h2 class="section_2__title title_2 text-decor--rotated">
                                <span class="ml12">Green</span><br />
                                <span class="ml12">Coffee</span><br />
                                <span class="ml12">Polyphenol</span>
                            </h2>
                            <p class="section_2__paragraph paragraph_1">
                                Містить унікальний природний комплекс антиоксидантів. Контролює засвоєння глюкози, нормалізує обмін речовин.
                            </p>
                            <i class="section_2__decor"></i>
                        </div>
                        <div class="section_2__right-side">
                            <span class="description description--top note">Вивільнення глюкози в печінці</span>
                            <span class="description description--bottom note">Знижене поглинання глюкози в кишечнику</span>
                            <i class="section_2__image image-man">
                                <i class="image-man-top"></i><i class="image-man-bottom"></i>
                                <span class="text-line text-line-1"></span><span class="text-line text-line-2"></span>
                            </i>
                            <i class="section_2__image image-woman">
                                <i class="image-woman-top"></i><i class="image-woman-bottom"></i>
                                <span class="text-line text-line-1"></span><span class="text-line text-line-2"></span>
                            </i>
                        </div>
                        <div class="section_2__footer">
                            <span class="footer__description" data-tilt>Вивільнення глюкози в печінці</span>
                            <span class="footer__description">Знижене поглинання глюкози в кишечнику</span>
                        </div>
                    </div>
                </section>

                <section class="section_new swiper-slide">
                        <!-- <div class="swiper-slide sidebar--green"></div> -->

                        <p class="section_new__title title_2 text-decor--rotated">
                                <span class="ml12">КЛІНІЧНІ </span><br>
                                <span class="ml12">ВИПРОБУВАННЯ</span>
                            </p>
                    <div id="swiper-statistics" class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <section class=" swiper-slide slide_1">
                                    <div class="swiper-slide__description">
                                        <p class="swiper-slide__paragraph paragraph_1">
                                                <span class="paragraph_1--bold">5,7% втрати ваги</span><br>
                                                У рандомізованому подвійному сліпому паралельному дослідженні, проведеному з 50 людьми, учасники втратили в середньому 11 футів (5 кілограмів) протягом 2 місяців
                                        </p>
                                        <p class="disclaimer">
                                                Через 60 днів у групі Svetol спостерігалося значне зниження ваги 4,97 ± 0,32 кг (-5,7%) у порівнянні з контрольною групою Placebo 2,45 ± 0,37 кг (-2,9%).
                                        </p>
                                    </div>
                                    <div class="swiper-slide__graphic ">
                                        <div class="graphic graphic--1 graphic_24">
                                            <span class="graphic__title">PLACEBO</span>
                                            <i class="graphic__elips"><span class="graphic__value">-2,4 кг</span></i>
                                            <i class="graphic__stick"></i>
                                        </div>
                                        <div class="graphic graphic--2 graphic_5">
                                                <span class="graphic__title">GREEN COFFEE<br />POLYPHENOL<br />(SVETOL®)</span>
                                                <i class="graphic__elips"><span class="graphic__value">-5 кг</span></i>
                                                <i class="graphic__stick"></i>
                                        </div>
                                    </div>
                            </section>
                            <section class=" swiper-slide slide_2">
                                    <div class="swiper-slide__description">
                                        <p class="swiper-slide__paragraph paragraph_1 ">
                                        <span class="paragraph_1--bold">10% Зменшення індексу маси тіла.</span><br> Клінічні дослідження демонструють зниження протягом 2 місяців індексу маси тіла (ІМТ) до 10% (на 1,9 кг/м2)
                                        </p>
                                        <p class="disclaimer">
                                            Зменшення (ІМТ) групи Svetol в порівнянні з групою Placebo склало: -1,9 ± 0,1 кг / м2 проти -0.9 ± 0,1 кг / м2 відповідно (Р <0,001).
                                        </p>
                                    </div>
                                    <div class="swiper-slide__graphic">
                                            <div class="graphic graphic--1 graphic_15">
                                                <span class="graphic__title">PLACEBO</span>
                                                <i class="graphic__elips"><span class="graphic__value">-0,9 <br>кг/м2</span></i>
                                                <i class="graphic__stick"></i>
                                            </div>
                                            <div class="graphic graphic--2 graphic_41">
                                                <span class="graphic__title">GREEN COFFEE<br />POLYPHENOL<br />(SVETOL®)</span>
                                                <i class="graphic__elips"><span class="graphic__value">-1,9 <br>кг/м2</span></i>
                                                <i class="graphic__stick"></i>
                                            </div>
                                        </div>
                            </section>
                            <section class=" swiper-slide slide_3">
                                    <div class="swiper-slide__description">
                                        <p class="swiper-slide__paragraph paragraph_1 ">
                                            <span class="paragraph_1--bold">Регуляція глюкози.</span><br>
                                            Експериментальне дослідження показує вплив Svetol на зниження рівня цукру в крові.
                                        </p>
                                        <p class="disclaimer">
                                            Результати показали значне зниження рівня цукру в крові після навантаження, в групі Placebo і у людей, що приймали Svetol® (147,8 ± 9,3 проти 133 ± 8,7 мг / дл, (p <0,05).
                                        </p>
                                    </div>
                                    <div class="swiper-slide__graphic">
                                            <div class="graphic graphic--1 graphic_148">
                                                <span class="graphic__title">PLACEBO</span>
                                                <i class="graphic__elips"><span class="graphic__value">147,8 <br>мл/дл</span></i>
                                                <i class="graphic__stick"></i>
                                            </div>
                                            <div class="graphic graphic--2 graphic_133">
                                                    <span class="graphic__title">GREEN COFFEE<br />POLYPHENOL<br />(SVETOL®)</span>
                                                    <i class="graphic__elips"><span class="graphic__value">133 <br>мл\дл</span></i>
                                                    <i class="graphic__stick"></i>
                                            </div>
                                        </div>
                            </section>
                            <section class=" swiper-slide slide_4">
                                    <div class="swiper-slide__description">
                                        <p class="swiper-slide__paragraph paragraph_1 ">
                                        <span class="paragraph_1--bold">Ефект спалювання жирів: + 4% м'язова маса / жирова маса.</span><br> Дослідження показують переваги Svetol® по зниженню жирової маси. Клінічні дослідження показують, що Svetol® є ефективним рішенням для зниження ваги. При цьому, ви не втрачаєте воду або м'язи, але втрачаєте жир.</p>
                                        <p class="disclaimer">
                                            Значно збільшено співвідношення м'язової маси до жирової маси в групі Svetol® - на + 4,1 ± 0,7% в порівнянні з Placebo на + 1,6 ± 0,6% (p = 0,01).
                                        </p>
                                    </div>
                                    <div class="swiper-slide__graphic ">
                                            <div class="graphic graphic--1 graphic_15">
                                                <span class="graphic__title">PLACEBO</span>
                                                <i class="graphic__elips"><span class="graphic__value">+1,6 %</span></i>
                                                <i class="graphic__stick"></i>
                                            </div>
                                            <div class="graphic graphic--2 graphic_41">
                                                    <span class="graphic__title">GREEN COFFEE<br />POLYPHENOL<br />(SVETOL®)</span>
                                                    <i class="graphic__elips"><span class="graphic__value">+4,1 %</span></i>
                                                    <i class="graphic__stick"></i>
                                            </div>
                                        </div>
                            </section>
                            <section class=" swiper-slide slide_5">
                                <div class="swiper-slide__description">
                                    <p class="swiper-slide__paragraph paragraph_1 ">
                                        <span class="paragraph_1--bold">Бібліографічні посилання:</span>
                                        <ul class="clinical-refs__list swiper-slide__paragraph">
                                            <li class="clinical-ref">- van Dam et al., 2006</li>
                                            <li class="clinical-ref">- Blum et al., 2007</li>
                                            <li class="clinical-ref">- Dellalibera et al., 2006</li>
                                            <li class="clinical-ref">- Henry-Vitrac et al., 2010</li>
                                            <li class="clinical-ref">- Nardon et al., 2007</li>
                                            <li class="clinical-ref">- Farah et al., 2008</li>
                                        </ul>
                                    </p>
                                </div>

                        </section>
                        </div>
                    </div>
                    <div class="section_new__slider navigation slider-navigation">
                        <div class="slider-navigation__wrapper">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                    </div>
                </section>
                <!-- Section #3 -->
                <section class=" swiper-slide section_3">
                    <div class="container">

                        <div class="hero">
                            <p class="section_3__title hero__brand-text title_3"><span class="ml12">Green Coffee Polyphenol</span></p>
                            <h2 class="section_3__paragraph hero__title title_2">
                                <span class="ml12">ЗДОРОВИЙ СПОСІБ </span><br />
                                <span class="ml12">УПРАВЛІННЯ ВАГОЮ</span>
                            </h2>
                            <a href="./docs/GC-UA.pdf" download class="button button__to-order button--green"><span class="button__text">СКАЧАТИ БРОШУРУ</span></a>
                            <a href="#" class="button button--price button button__to-order-- button--transparent btn-order"><span class="button__text">ЗАМОВИТИ</span></a>
                            <p class="section_3__disclaimer disclaimer">Ефективність препарату індивідуальна, і залежить від особливостей організму і стилю життя. В середньому люди, що приймають препарат втрачають 3-5 кг ваги за 2х-місячний курс </p>
                        </div>
                    </div>
                </section>
                <!-- Section #4 -->
                <section class="swiper-slide section_4">
                    <div class="container">
                        <div class="section_4__left-side">
                            <h3 class="section_4__title title_1 text-decor--rotated decorator-2">
                                <span class="text__black title-stroke ml12">основные</span
                                ><span class="text__green title-stroke ml12">особенности</span>
                            </h3>
                            <i class="section_4__decor"></i>
                        </div>
                        <div class="cards-set">
                            <div class="card card-1">
                                <div class="card__card-content card-content">
                                    <i class="card-content__card-number paragraph_2">01</i>
                                    <p class="card-content__card-title title_3">КОРЕКЦІЯ ОБМІНУ РЕЧОВИН</p>
                                    <p class="card-content__card-description paragraph_3">
                                        Зелена кава - рекордсмен за змістом хлорогенової кислоти. Це потужний актиоксидант рослинного походження, який «переналаштовує» наш організм на спалювання, а не запасання жирів.
                                    </p>
                                    <i class="card-content__card-arrow icon-right-open"></i>
                                </div>
                                <div class="card__image"><img src="./images/section_4/1.png" alt="" /></div>
                            </div>
                            <div class="card card-2">
                                <div class="card__card-content card-content">
                                    <i class="card-content__card-number paragraph_2">02</i>
                                    <p class="card-content__card-title title_3">Клінічно підтверджена користь</p>
                                    <p class="card-content__card-description paragraph_3">
                                        9 наукових досліджень впливу екстракту зеленої кави Svetol®, проведених в Європі, підтверджують його позитивний вплив на корекцію ваги.
                                    </p>
                                    <i class="card-content__card-arrow icon-right-open"></i>
                                </div>
                                <div class="card__image"><img src="./images/section_4/2.png" alt="" /></div>
                            </div>
                            <div class="card card-3">
                                <div class="card__card-content card-content">
                                    <i class="card-content__card-number paragraph_2">03</i>
                                    <p class="card-content__card-title title_3">ПРОСТА ПРОГРАМА БЕЗ ДІЄТИ</p>
                                    <p class="card-content__card-description paragraph_3">
                                        Щоденний дворазовий прийом препарату протягом 2-х місяців допомагає знижувати вагу не змінюючи стилю життя і звичок харчування
                                    </p>
                                    <i class="card-content__card-arrow icon-right-open"></i>
                                </div>
                                <div class="card__image"><img src="./images/section_4/3.png" alt="" /></div>
                            </div>
                            <div class="card card-4">
                                <div class="card__card-content card-content">
                                    <i class="card-content__card-number paragraph_2">04</i>
                                    <p class="card-content__card-title title_3">АНТІЕЙДЖИНГ ЕФЕКТ АНТИОКСИДАНТІВ</p>
                                    <p class="card-content__card-description paragraph_3">
                                        В необсмажених кавових зернах міститься понад дві тисячі антиоксидантів, які допомагають розщеплювати жири, переробляти жирні кислоти, прискорюють обмін речовин, пов'язують вільні радикали і мають антиейджинг ефект.
                                    </p>
                                    <i class="card-content__card-arrow icon-right-open"></i>
                                </div>
                                <div class="card__image"><img src="./images/section_4/4.png" alt="" /></div>
                            </div>
                            <div class="card card-5">
                                <div class="card__card-content card-content">
                                    <i class="card-content__card-number paragraph_2">05</i>
                                    <p class="card-content__card-title title_3">БЕЗПЕЧНЕ УПРАВЛІННЯ ВАГОЮ</p>
                                    <p class="card-content__card-description paragraph_3">
                                        У виробництві використовується декофеїнізоване зерно, тому Green Coffee Polyphenol не викликає побічних ефектів у вигляді підвищеного тиску, прискореного серцевого ритму і збудженості.
                                    </p>
                                    <i class="card-content__card-arrow icon-right-open"></i>
                                </div>
                                <div class="card__image"><img src="./images/section_4/5.png" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section #5 -->
                <section class=" swiper-slide section_5">
                    <div class="container">
                        <div class="hero">
                            <h3 class="section_5__paragraph hero__title title_2  text-decor--rotated decorator-3">
                                <span class="ml12">ЗАДАТИ БУДЬ-ЯКЕ ПИТАННЯ</span><br />
                                <span class="ml12">ПО ІННОВАЦІЙНОМУ ПРОДУКТУ</span><br />
                                <span class="ml12">МОЖНА ПРЯМО ЗАРАЗ</span>
                            </h3>
                            <div class="button-container">
                                <a href="#" class="button__to-order btn-order button--green button"><span class="button__text">КУПИТИ</span></a>
                                <a href="#" class="button__price button--transparent btn-callback">УТОЧНИТИ ЦІНУ І ДОЗУВАННЯ</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section #6 -->
                <div class="swiper-slide section_6 sidebar--green section-contacts">
                    <div class="logo">
                        <a href="/" class="logo__link"></a> <span class="logo__text paragraph_2">Healthy Nutrition</span>
                    </div>
                    <ul class="contacts">
                        <li class="contacts__item">
                            <h5 class="contacts__title title_3">Наша адреса:</h5>
                            <p class="contacts__description paragraph_2">г. Киев ул. Липинского 3</p>
                        </li>
                        <li class="contacts__item">
                            <h5 class="contacts__title title_3">Телефон:</h5>
                            <a href="tel:+380445375280" class="contacts__description paragraph_2">0 800 60 77 87</a>
                        </li>
                        <li class="contacts__item">
                            <h5 class="contacts__title title_3">Еmail:</h5>
                            <a href="email:tobeplus@gmail.com" class="contacts__description paragraph_2">nutrition@tobeplus.com.ua</a>
                        </li>
                    </ul>
                </div>
                <!-- Section #7 -->
                <div id="section-map" class="swiper-slide section_7 "><img src="./images/map/map-1.png" alt="" /></div>
            </div>
        </div>
        <!-- <div style="display: none;" id="modal_callback" class="modal__content">
            <form action="#" id="modal-form" method="post">
                <input type="text" id="input-name" name="name" placeholder="Имя">
                <input type="tel" id="input-tel" name="tel" placeholder="Телефон">
                <input type="submit" value="Отправить">
            </form>
        </div> -->

        <div id="modal_to-order" class="modal__content modal modal--to-order">
                <div class="modal__content">
                        <div class="form-image">
                            <i class="product-image"></i>
                        </div>
                        <div class="form-calculator">
                                <p class="form-calculator__title paragraph_1">Green Coffee <br>  Polyphenol <br> 60 капсул</p>
                                <span class="form-calculator__price">1200 грн</span>
                                <div class="form-calculator__buttons">
                                    <i class="buttons__button-dec">-</i>
                                    <div class="buttons__counter">
                                        <span id="order-count" class="counter__value">2</span>
                                        <i class="counter__piece">шт</i>
                                    </div>
                                    <i class="buttons__button-inc">+</i>
                                </div>
                                <div class="form-calculator__total-price">
                                    <span class="price__title">
                                        Загалом:
                                    </span>
                                    <span class="price__value paragraph_1">
                                        1200
                                    </span>
                                    <span class="price__type paragraph_1">грн</span>
                                </div>
                            </div>
                        </div>
                <div id="modal-form" class="modal__form">
                    <input type="text" id="input-name" name="name" placeholder="Им'я">
                    <input type="email" id="input-email" name="email" placeholder="Email">
                    <input type="tel" id="input-tel" name="tel" placeholder="Телефон">
                    <input id="to_order-button" type="submit" value="Оформити">
                    <div id="success-modal"></div>
                </div>
            </div>
        <script src="./scripts/tilt.js"></script>
        <script src="./scripts/main.js"></script>
        <script src="./scripts/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.4.2/lottie.js"></script>
    </body>
</html>
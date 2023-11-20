<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <script src="{{ URL::asset('js/main.js') }}"></script>
        <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
        <link href="{{ URL::asset('css/main-big.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div id="fixed-img-container">
            <img src="images/bolts3.jpg" id="fixed-img">
        </div>
       <header id="header-big">
            <div id="header-logo-container">
                <img id="header-logo" src="/images/logo1.png" width="100">
                <div id="header-logo-container-text">
                    <div id="header-logo-container-h">
                        Лидер Крепеж
                    </div>
                    <div id="header-logo-container-name">
                        Крепежные изделия
                    </div>
                </div>
            </div>
            <div id="header-phone-container">
                <div id="header-phone-icon-container">
                    <img src="/images/tel-wh-32.png">
                </div>
                <div id="header-phone-text">
                    <div id="header-phone-text1">
                        Звоните по номеру
                    </div>
                    <div id="header-phone-number">
                        +7 702 723 73 14
                    </div>
                </div>
            </div>
       </header>
       <div id="main-image-container">
           <div id="shadow"></div>
           <div class="border"></div>
            <div id="main-image-text">
                КРЕПЕЖНЫЕ <span style="color:#ff6035">ИЗДЕЛИЯ</span> И МЕТИЗЫ
            </div>
            <div id="main-image-slogan">
                <div id="main-image-slogan-inner">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit alias sapiente, ipsam distinctio inventore ipsa iure nulla eos! Eligendi nesciunt reprehenderit hic distinctio minus cum autem asperiores veritatis quisquam?
                </div>
            </div>
       </div>
       <div id="about-us-container">
           <div id="about-us-img-container">
               <div id="shadow1"></div>
           </div>
           <div id="about-us-info">
               <div id="about-us-header">
                   НЕМНОГО О НАШЕЙ КОМПАНИИ
               </div>
               <div id="about-us-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quae, et cum quidem hic officia ut repudiandae, iure adipisci asperiores debitis doloremque, fugiat odit. Ullam facilis laboriosam odit voluptatem eveniet.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quae, et cum quidem hic officia ut repudiandae, iure adipisci asperiores debitis doloremque, fugiat odit. Ullam facilis laboriosam odit voluptatem eveniet.
               </div>
               <div id="about-us-offer">
                    <div id="about-us-offer-assorti">
                        <div id="about-us-offer-assorti-img-container">
                            <img src="/images/kluch-24.png">
                            <img src="/images/shurup-24.png">
                        </div>
                        <div id="about-us-offer-assorti-header">
                            ШИРОКИЙ АССОРТИМЕНТ
                        </div>
                        <div id="about-us-offer-assorti-text">
                            У нас Вы найдете все! Более 25 лет наша компания занимает лидерское место в данной сфере услуг
                        </div>
                    </div>
                    <div id="about-us-offer-prices">
                        <div id="about-us-offer-prices-img-container">
                            <img src="/images/meshok-24wh.png">
                            <img src="/images/money-24wh.png">
                        </div>
                        <div id="about-us-offer-prices-header">
                            ГИБКИЕ ЦЕНЫ
                        </div>
                        <div id="about-us-offer-prices-text">
                            Доступные цены на все! 750 партнеров по всему миру. 95% наших клиентов становятся постоянными
                        </div>
                    </div>
                </div>
           </div>
       </div>
       <div id="offer-container-header">
            МЫ ПРЕДЛАГАЕМ
        </div>
        <div id="offer-container-sub-header">
            Лучшие крепежные изделия!
        </div>
       <div id="offer-container" class="">
            
        <div id="offer-container-content">
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii1"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    КРЕПЕЖ (БОЛТЫ, ГАЙКИ, ШАЙБЫ)
                </div>
                <div class="offer-container-item-desc">
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii2"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    СТАЛЬНЫЕ КАНАТЫ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii3"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    ПЕРФОРИРОВАННЫЙ КРЕПЕЖ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii4"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    ТАКЕЛАЖ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii5"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    ЭЛЕКТРОДЫ И СВАРОЧНАЯ ПРОВОЛОКА
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii6"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    ХОМУТЫ И СТЯЖКИ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii7"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    РУЧНОЙ ИНСТРУМЕНТ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii8"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    ДИСКИ ОТРЕЗНЫЕ, ШЛИФОВАЛЬНЫЕ, ПИЛЬНЫЕ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii9"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    ПЕНА, КРАСКА, РАСТВОРИТЕЛЬ, КЛЕЙ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">100% гарантия качества</div>
                </div>
                <div class="offer-container-item-img" id="ocii10"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    ТЕПЛОИЗОЛЯЦИЯ
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
            <div class="offer-container-item">
                <div class="guarantee-container">
                    <div class="guarantee-img">
                        <img src="images/guarantee-wh36.png" alt="">
                    </div>
                    <div class="guarantee-text">
                        100% гарантия качества
                    </div>
                </div>
                <div class="offer-container-item-img" id="ocii11"></div>
                <div class="shadow-for-offer"></div>
                <div class="offer-container-item-header">
                    СКОТЧ, ИЗОЛЕНТА
                </div>
                <div class="offer-container-item-desc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo officia quos sequi ratione, deserunt alias facilis pariatur corrupti itaque, blanditiis amet explicabo doloribus a. Mollitia tenetur libero obcaecati eos?
                </div>
            </div>
    </div>
       </div>
       <div id="why-us">
            <div id="why-us-header">
                Почему выбирают нас?
            </div>
            <div id="why-us-subheader">
                НАШИ ПРЕИМУЩЕСТВА
            </div>
            <div id="why-us-block-container">
                <div class="why-us-block">
                    <div class="why-us-block-img">
                        <img src="images/kubok-96.png" alt="" width="80">
                    </div>
                    <div class="why-us-block-header">
                        17
                    </div>
                    <div class="why-us-block-desc">
                        лет на рынке
                    </div>
                </div>
                <div class="why-us-block">
                    <div class="why-us-block-img">
                        <img src="images/shaft-96.png" alt="" width="80">
                    </div>
                    <div class="why-us-block-header">
                        5000
                    </div>
                    <div class="why-us-block-desc">
                        кг производства крепежа каждый год
                    </div>
                </div>
                <div class="why-us-block">
                    <div class="why-us-block-img">
                        <img src="images/handsshake-96.png" alt="" width="80">
                    </div>
                    <div class="why-us-block-header">
                        2500
                    </div>
                    <div class="why-us-block-desc">
                        заказов в год
                    </div>
                </div>
            </div>
       </div>
       <footer id="footer-big">
            <div id="footer-big-first-block">
                <div class="footer-block1-item">
                    <div class="footer-block1-item-img-container">
                        <img src="images/phone-24wh.png" alt="">
                    </div>
                    <div class="footer-block1-item-content">
                        <div class="footer-block1-item-header">
                            Свяжитесь с нами
                        </div>
                        <div class="footer-block1-item-text">
                            +7 702 723 73 14
                        </div>
                    </div>
                </div>
                <div class="footer-block1-item">
                    <div class="footer-block1-item-img-container">
                        <img src="images/mail-24wh.png" alt="">
                    </div>
                    <div class="footer-block1-item-content">
                        <div class="footer-block1-item-header">
                            Наша почта
                        </div>
                        <div class="footer-block1-item-text">
                            lider_krepezh@mail.ru
                        </div>
                    </div>
                </div>
                <div class="footer-block1-item">
                    <div class="footer-block1-item-img-container">
                        <img src="images/geo-24wh.png" alt="">
                    </div>
                    <div class="footer-block1-item-content">
                        <div class="footer-block1-item-header">
                            Наш адрес
                        </div>
                        <div class="footer-block1-item-text">
                            ул. Пушкина, 127
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-big-second-block">
                <div id="footer-big-second-block-first-item">
                    <div id="first-item-img-container">
                        <img src="images/logo1.png" alt="" width="100">
                    </div>
                    <div id="first-item-content">
                        <div id="first-item-header">
                            ЛИДЕР КРЕПЕЖ
                        </div>
                        <div id="first-item-text">
                            Крепежные изделия
                        </div>
                    </div>
                </div>
                <div id="footer-big-second-block-second-item">
                    Мы будем искренне рады, если в нашем лице Вы найдёте достойного и надёжного партнёра. Мы обеспечиваем клиента высоким качеством предоставляемого сервиса, а это, в свою очередь, не может остаться незамеченным.
                </div>
            </div>
            <div id="footer-button-up-container">
                <div id="footer-up-button">
                    <img src="images/up-arrow-36wh.png" alt="">
                </div>
            </div>
       </footer>
    </body>
    <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
</html>

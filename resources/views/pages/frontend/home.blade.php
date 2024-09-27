@extends('layouts.frontend_app')
@section('frontend_content')
<!-- promo Start -->
  <div class="promo">
    <div
      class="promo__photo"
      style="background-image: url({{asset('assets/frontend/img/src/promo.jpg')}})"
    ></div>
    <div class="slider promo__mov-slider">
      <div class="promo__mov-slider__item">
        <!-- <video id="VideoChange" autoplay muted playsinline webkit-playsinline poster="#" preload="none" src="mov/mov-factory.mp4"></video> -->
      </div>
    </div>
    <div class="promo__in">
      <div class="promo__content">
        <div
          class="container"
          id="topTitle"
          style="max-width: 1460px !important"
        >
          <h1 class="promo__title">
            <span>Toshkent Invest</span> ИНВЕСТИРУЙТЕ В БУДУЩЕЕ!
          </h1>
          <p>
            Акционерное общество «Компания Ташкент Инвест» было создано при
            учредительстве хокимията столицы в августе 2023 года по указу
            Президента Республики Узбекистан №УП-112.
          </p>
          <a href="factory.html" class="btn">
            <span>Узнать подробнее</span>
          </a>
          <a href="about.html" hidden class="btn">
            <span>Узнать больше</span>
          </a>
        </div>
      </div>
    </div>
    <a href="#about" class="to-bottom">Прокрутить</a>
  </div>
  <!-- promo end -->
  <!-- page Start -->
  <div class="page">
 
    <section class="section">
      <div class="container">
        <div class="section__in">
          <div class="section__content">
            <div class="section__top-panel">
              <h2 class="sm-gl-title first-animation">
                <span>02</span>
                <small>Наши преимущества</small>
              </h2>
              <a href="about.html" class="btn-sm-size second-animation">
                <span>Узнать больше</span>
              </a>
            </div>
            <ul class="advantage__list">
              <li>
                <div class="advantage__item first-animation">
                  <div class="advantage__icon">
                    <img src="{{asset('assets/frontend/img/bg/advantage.svg')}}" alt="icon" />
                  </div>
                  <span class="advantage__title">ПРОФЕССИОНАЛИЗМ</span>
                  <p>
                    Основа нашего профессионализма – сплоченная команда высококлассных иностранных и местных специалистов.

                  </p>
                </div>
              </li>
              <li>
                <div class="advantage__item third-animation">
                  <div class="advantage__icon">
                    <img src="{{asset('assets/frontend/img/bg/advantage2.svg')}}" alt="icon" />
                  </div>
                  <span class="advantage__title">ОПЫТ КОМПАНИИ
                  </span>
                  <p>
                    Компания обладает большим опытом во всех сферах жизнедеятельности города – строительство, промышленность, услуги и социальные сферы.

                  </p>
                </div>
              </li>
              <li>
                <div class="advantage__item second-animation">
                  <div class="advantage__icon">
                    <img src="{{asset('assets/frontend/img/bg/advantage3.svg')}}" alt="icon" />
                  </div>
                  <span class="advantage__title">НЕТВОРК</span>
                  <p>
                    Тесное сотрудничество с бизнесом и государственными органами дает возможность ускорять процессы принятия решений.

                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section
      id="products"
      class="section indent-bt-none advantage dec-none"
    >
      <div class="container">
        <div class="section__in">
          <div class="section__content">
            <div class="section__top-panel indent-bt-big">
              <h2 class="sm-gl-title first-animation">
                <span>03</span>
                <small>НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ
                </small>
              </h2>
              <a class="btn-sm-size second-animation" href="partners.html">
                <span>Партнёрам</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <ul class="services">
        <li>
          <div class="services__item first-animation">
            <a
              href="news.html"
              style="background-image: url({{asset('assets/frontend/img/src/services/services.jpg')}})"
            >
              <span class="services__content">
                <span class="services__title">
                  <small>СТРОИТЕЛЬСТВО<br />
                    И РЕНОВАЦИЯ</small>
                  <span
                    >TEXT</span
                  >
                </span>
                <span class="btn-sm-size">
                  <span>Перейти</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li>
          <div class="services__item fourth-animation">
            <a
              href="construction-sector.html"
              style="background-image: url({{asset('assets/frontend/img/src/services/services2.jpg')}})"
            >
              <span class="services__content">
                <span class="services__title">
                  <small>ПРОМЫШЛЕННОСТЬ</small>
                  <span
                    >TEXT<br />
                    </span
                  >
                </span>
                <span class="btn-sm-size">
                  <span>Перейти</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li>
          <div class="services__item third-animation">
            <a
              href="heating-solutions.html"
              style="background-image: url({{asset('assets/frontend/img/src/services/services3.jpg')}})"
            >
              <span class="services__content">
                <span class="services__title">
                  <small>ИНФРАСТРУКТУРА</small>
                  <span
                    >TEXT<br />
                    </span
                  >
                </span>
                <span class="btn-sm-size">
                  <span>Перейти</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li>
          <div class="services__item second-animation">
            <a
              href="head_Innovation.html"
              class="products-link"
              style="background-image: url({{asset('assets/frontend/img/src/services/services4.jpg')}})"
            >
              <span class="services__content">
                <span class="services__title">
                  <small>УСЛУГИ И СОЦИАЛЬНЫЕ  <br />
                    ПРОЕКТЫ</small>
                  <span
                    >TEXT</span
                  >
                </span>
                <span class="btn-sm-size">
                  <span>Перейти</span>
                </span>
              </span>
            </a>
          </div>
        </li>
      </ul>
    </section>
   
 
    <section class="section gl-bg dec-none">
      <div class="container">
        <div class="section__in">
          <div class="section__content">
            <div class="section__top-panel">
              <h2 class="sm-gl-title first-animation">
                <span>04</span>
                <small>Последние новости</small>
              </h2>
              <span class="gl-link second-animation">
                <a href="news.html">Все новости</a>
              </span>
            </div>
            <ul class="news">
              <li>
                <div class="news__item third-animation">
                  <div class="news__photo">
                    <a href="news-2024-05-15.html">
                      <img
                        src="{{asset('assets/frontend/img/src/news/__2024-05-15__23425A.png')}}"
                        alt="photo" loading="lazy"
                      />
                    </a>
                  </div>
                  <dl class="news__date">
                    <dt>TOSHKENT INVEST</dt>
                    <dd>15.05.2024</dd>
                  </dl>
                  <span class="news__title">
                    <a href="news-2024-05-15.html">
                      «TASHKENT INVEST» во главе стратегии городского развития
                    </a>
                  </span>
                  <a
                    href="news-2024-05-15.html"
                    class="btn-sm-size"
                  >
                    <span>Подробнее</span>
                  </a>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="section__in">
          <div class="section__content">
            <div class="section__top-panel"></div>
            <h2 class="sm-gl-title changed fourth-animation">
              <span>05</span>
              <small>Наши партнёры</small>
            </h2>
            <div class="slider partners-slider third-animation">
             
              <div class="slider partners-slider__item">
                <div class="partners-slider__item__in">
                  <img
                    src="{{asset('assets/frontend/img/src/logos/european-bank-for-reconstruction-and-development-ebrd-vector-logo.svg')}}"
                    alt="partners"
                  />
                </div>
              </div>
            
           
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="bt-indent">&nbsp;</div>
  </div>
  <!-- page end -->
@endsection
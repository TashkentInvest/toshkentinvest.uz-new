@extends('layouts.frontend_app')
@section('frontend_content')
<div class="page">
    <div class="page__top-panel">
      <div
        class="page__top-panel__photo"
        style="background-image: url({{asset('assets/frontend/img/src/promo3.jpg)')}}"
      ></div>
    
      <div class="container">
        <div class="page__top-panel__in">
          <h1 class="page__top-panel__title">Новости</h1>
          <nav class="bread-crumbs">
            <ul>
              <li><a href="index.html">Главная</a><i>/</i></li>
              <li>
                <span>Новости</span>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="container">
        <div class="section__in">
          <div class="section__content">
            <ul class="news changed">
              <li>
                <div class="news__item second-animation">
                  <div class="news__photo">
                    <a href="news-2024-05-15.html">
                      <img
                        src="{{asset('assets/frontend/img/src/news/__2024-05-15__23425A.png')}}"
                        alt="photo"
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
            <ul class="page-navi first-animation">
              <li>
                <a class="page-numbers current" href="#">1</a>
              </li>
            
              <li>
                <span class="next page-numbers">
                  <a href="news.html">Вперед</a>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="bt-indent">&nbsp;</div>
  </div>
@endsection
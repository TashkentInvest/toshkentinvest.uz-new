@extends('layouts.frontend_app')
@section('frontend_content')
    <div class="page">
        <div class="page__top-panel">
            <div class="page__top-panel__photo" style="background-image: url({{asset('assets/frontend/img/src/promo3.jpg')}})"></div>
          
            <div class="container">
                <div class="page__top-panel__in">
                    <h1 class="page__top-panel__title">Руководство</h1>
                    <nav class="bread-crumbs">
                        <ul>
                            <li>
                                <a href="index.html">Главная</a><i>/</i>
                            </li>
                            <li>
                                <span>Руководство</span>
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
                        <ul class="partners-list">
                            <li>
                                <div class="partners-list__item first-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/Бахром ака 3х4.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Бахром Шакиров<br /></a>
                                    </span>
                                    <small class="partners-list__post">Председатель правления </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item third-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/gurko.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Александр Гурко<br /></a>
                                    </span>
                                    <small class="partners-list__post">Первый заместитель председателя правления
                                        по цифровизации
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item second-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/Рисунок1.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Андрей Перегудов
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по строительству и реновации
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item first-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/nargizahon.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Наргизахон Отахонова
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по управлению проектами
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item third-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/rustam.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Рустам Кодиров
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по стратегическому развитию
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item second-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/Рисунок1.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Никита Рябов
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по инвестициям
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item first-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/baxtiyor.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Бахтиёр Мирзаев
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Заместитель председателя правления
                                        по финансам
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>
                            <li>
                                <div class="partners-list__item third-animation">
                                    <div class="partners-list__photo">
                                        <a href="partners-info.html">
                                            <img src="{{asset('assets/frontend/img/src/dealers/murat.jpg')}}" loading="lazy" data-load="lazy" alt="photo" />
                                        </a>
                                    </div>
                                    <span class="partners-list__name">
                                        <a href="partners-info.html">Мурат Бараев
                                            <br /> </a>
                                    </span>
                                    <small class="partners-list__post">Руководитель администрации
                                    </small>
                                    <a href="partners-info.html" class="more-link">Подробнее</a>
                                </div>
                            </li>


                        </ul>
                        <!--<ul class="page-navi first-animation">
                            <li>
                                <a class="page-numbers current" href="#">1</a>
                            </li>
                            <li>
                                <a class="page-numbers" href="#">2</a>
                            </li>
                            <li>
                                <a class="page-numbers" href="#">3</a>
                            </li>
                            <li>
                                <a class="page-numbers" href="#">4</a>
                            </li>
                            <li>
                                <span class="next page-numbers">
                                    <a href="#">Вперед</a>
                                </span>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </section>
        <div class="bt-indent">&nbsp;</div>
    </div>
@endsection

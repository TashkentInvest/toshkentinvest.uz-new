<header class="header is-sticky white">
    <div class="header__in">
      <a class="logo" href="/">
           <img style="width: 100px" src="{{asset('assets/frontend/img/logo.png')}}" alt="" />
      </a>
      <div class="header__right-col">
        <nav class="main-navi">
          <ul>
            <li>
              <span>О компании</span>
              <div class="main-navi__dropdown">
                <div class="main-navi__dropdown__in">
                  <ul>
                    <li>
                      <a href="about.html">О нас</a>
                    </li>
                    <li>
                      <a href="histrory.html">История</a>
                    </li>
                    <li>
                      <a href="{{route('frontend.rukavodstva')}}">Руководство</a>
                    </li>
              
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="#products" class="products-link">Инвесторам</a>
              <div class="main-navi__dropdown big-size">
                <div class="main-navi__dropdown__in">
                  <ul>
                    <li>
                      <a href="{{route('frontend.news')}}"
                        >Инвестиционный потенциал города</a
                      >
                    </li>
                    <li>
                      <a href="construction-sector.html"
                        >ОПЗ "Янги Авлод"</a
                      >
                    </li>
                    <li>
                      <a href="heating-solutions.html"
                        >Реновация и строительство</a
                      >
                    </li>
                    <li>
                      <a href="head_Innovation.html">Проекты ГЧП</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <li>
              <a href="directions.html">Карьера</a>
              <div class="main-navi__dropdown">
                <div class="main-navi__dropdown__in">
                  <ul>
                    <li>
                      <a href="invest_it_centre.html">Наша команда</a>
                    </li>
                    <li>
                      <a href="research-development.html">Вакансии</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="#products" class="products-link">Пресс-центр</a>
              <div class="main-navi__dropdown big-size">
                <div class="main-navi__dropdown__in">
                  <ul>
                    <li>
                      <a href="{{route('frontend.news')}}">Новости</a>
                    </li>
                    <li>
                      <a href="construction-sector.html">Медиа</a>
                    </li>
                    <li>
                      <a href="heating-solutions.html"
                        >Тендеры и конкурсы</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <li>
              <a href="{{route('frontend.contact')}}">Контакты</a>
        
            </li>
          </ul>
        </nav>
        <div class="language-selection">
          <span class="language-selection__text">Ru</span>
          <div class="language-selection__dropdown">
            <ul>
              <li>
                <a href="uz/index.html">
                  <span class="language-selection__dropdown__icon">
                    <img src="{{asset('assets/frontend/img/src/flags/uz.svg')}}" alt="Uz" />
                  </span>
                  <span class="language-selection__dropdown__text">Uz</span>
                </a>
              </li>
              <li>
                <a href="eng/index.html">
                  <span class="language-selection__dropdown__icon">
                    <img src="{{asset('assets/frontend/img/src/flags/eng.svg')}}" alt="Uz" />
                  </span>
                  <span class="language-selection__dropdown__text"
                    >Eng</span
                  >
                </a>
              </li>
              <li>
                <a href="tr/index.html">
                  <span class="language-selection__dropdown__icon">
                    <img src="{{asset('assets/frontend/img/src/flags/tr.svg')}}" alt="Uz" />
                  </span>
                  <span class="language-selection__dropdown__text">Tr</span>
                </a>
              </li>
              <li>
                <a href="de/index.html">
                  <span class="language-selection__dropdown__icon">
                    <img src="{{asset('assets/frontend/img/src/flags/de.svg')}}" alt="Uz" />
                  </span>
                  <span class="language-selection__dropdown__text">De</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="menu-btn">
          <div class="menu-btn__in"></div>
        </div>
        <div class="header__sub-menu">
          <div class="header__sub-menu__in">
            <nav class="header__sub-menu__navi">
              <ul>
                <li class="changed">
                  <span class="header__sub-menu__navi__opening">О компании</span>
                  <div class="header__sub-menu__navi__dropdown">
                    <ul>
                      <li><a href="about.html">О нас</a></li>
                      <li><a href="histrory.html">История</a></li>
                      <li><a href="{{route('frontend.rukavodstva')}}">Руководство</a></li>
                    </ul>
                  </div>
                </li>
              
                <li class="changed">
                  <span class="header__sub-menu__navi__opening">Инвесторам</span>
                  <div class="header__sub-menu__navi__dropdown big-size">
                    <ul>
                      <li><a href="{{route('frontend.news')}}">Инвестиционный потенциал города</a></li>
                      <li><a href="construction-sector.html">ОПЗ "Янги Авлод"</a></li>
                      <li><a href="heating-solutions.html">Реновация и строительство</a></li>
                      <li><a href="head_Innovation.html">Проекты ГЧП</a></li>
                    </ul>
                  </div>
                </li>
              
                <li class="changed">
                  <span class="header__sub-menu__navi__opening">Карьера</span>
                  <div class="header__sub-menu__navi__dropdown">
                    <ul>
                      <li><a href="invest_it_centre.html">Наша команда</a></li>
                      <li><a href="research-development.html">Вакансии</a></li>
                    </ul>
                  </div>
                </li>
              
                <li class="changed">
                  <span class="header__sub-menu__navi__opening">Пресс-центр</span>
                  <div class="header__sub-menu__navi__dropdown big-size">
                    <ul>
                      <li><a href="{{route('frontend.news')}}">Новости</a></li>
                      <li><a href="construction-sector.html">Медиа</a></li>
                      <li><a href="heating-solutions.html">Тендеры и конкурсы</a></li>
                    </ul>
                  </div>
                </li>
              
                <li>
                  <span class="header__sub-menu__navi__opening">
                    <a class="menu_mob" href="{{route('frontend.contact')}}">Контакты</a>
                  </span>
                  <div class="header__sub-menu__navi__dropdown">
                    <ul>
                      <li><a href="country_of_export.html">Региональные представительства</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
            <div class="search-form">
              <form>
                <fieldset>
                  <input type="text" placeholder="Поиск" />
                </fieldset>
                <fieldset class="last-child">
                  <button type="submit" class="search-form__btn">
                    Поиск
                  </button>
                </fieldset>
              </form>
            </div>
            <dl class="language">
              <dt>Выбор языка:</dt>
              <dd>
                <ul>
                  <li>
                    <a href="uz/index.html">Uz</a>
                  </li>
                  <li class="active">
                    <a href="#">Ru</a>
                  </li>
                  <li>
                    <a href="eng/index.html">Eng</a>
                  </li>
                  <li>
                    <a href="tr/index.html">Tr</a>
                  </li>
                  <li>
                    <a href="de/index.html">De</a>
                  </li>
                </ul>
              </dd>
            </dl>
            <ul class="header__social">
              <li>
                <a href="https://facebook.com/Toshkent InvestUzb/" target="_blank">
                  <img src="{{asset('assets/frontend/img/bg/facebook-w.svg')}}" alt="icon" />
                </a>
              </li>
              <li>
                <a href="https://t.me/Toshkent Invest_support" target="_blank">
                  <img src="{{asset('assets/frontend/img/bg/telegram-w.svg')}}" alt="icon" />
                </a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/Toshkent Invest_windows_and_doors/?hl=ru"
                  target="_blank"
                >
                  <img src="{{asset('assets/frontend/img/bg/instagram-w.svg')}}" alt="icon" />
                </a>
              </li>
              <li>
                <a href="#!" target="_blank">
                  <img src="{{asset('assets/frontend/img/bg/whatsapp-w.svg')}}" alt="icon" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
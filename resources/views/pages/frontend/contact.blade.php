@extends('layouts.frontend_app')
@section('frontend_content')
  
<div class="page">
  <div class="page__top-panel">
      <div class="page__top-panel__photo" style="background-image: url({{asset('assets/frontend/img/src/promo3.jpg')}})"></div>

      <div class="container">
          <div class="page__top-panel__in">
              <h1 class="page__top-panel__title">Контакты</h1>
              <nav class="bread-crumbs">
                  <ul>
                      <li>
                          <a href="index.html">Главная</a><i>/</i>
                      </li>
                      <li>
                          <span>Контакты</span>
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
                  <div class="map">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14750.363320752616!2d69.2480871!3d41.3110561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b416cb16a05%3A0xc419744dbba16ba3!2sKhokimiyat%20Goroda%20Tashkent!5e1!3m2!1sen!2s!4v1727159746659!5m2!1sen!2s"
                          width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                          aria-hidden="false" tabindex="0"></iframe>
                  </div>
                  <ul class="contacts-list">
                      <li>
                          <div class="contacts-list__item">
                              <div class="contacts-list__icon">
                                  <img src="{{asset('assets/frontend/img/bg/address-w.svg')}}" alt="icon" />
                              </div>
                              <span class="contacts-list__title">Наш адрес</span>
                              <span class="contacts-list__text">г.Ташкент, улица Ислама Каримова, 51</span>
                          </div>
                      </li>
                      <li>
                          <div class="contacts-list__item">
                              <div class="contacts-list__icon">
                                  <img src="{{asset('assets/frontend/img/bg/mail-w.svg')}}" alt="icon" />
                              </div>
                              <span class="contacts-list__title">Наша почта</span>
                              <span class="contacts-list__text">
                                  <a href="mailto:info@tashkentinvest.com">info@tashkentinvest.com</a>
                              </span>
                          </div>
                      </li>
                      <li>
                          <div class="contacts-list__item">
                              <div class="contacts-list__icon">
                                  <img src="{{asset('assets/frontend/img/bg/phone-w.svg')}}" alt="icon" />
                              </div>
                              <span class="contacts-list__title">Телефон</span>
                              <span class="contacts-list__text">
                                  <a href="tel:+998 71 210 02 61">+998 71 210 02 61</a>
                              </span>
                          </div>
                      </li>
                  </ul>

                  <span class="gl-title">Связаться с Нами</span>
                  <div class="contacts-form">
                      <div id="return-form" class="gl-form">
                          <form id="contact" method="POST">
                              <input type="hidden" name="contacts_input">
                              <fieldset>
                                  <ul class="form-list">
                                      <li>
                                          <div class="gl-input user-i">
                                              <input name="f-name" id="name" type="text"
                                                  placeholder="Ваше имя *" required="required">
                                          </div>
                                      </li>
                                      <li>
                                          <div class="gl-input phone-i">
                                              <input id="phone" name="f-phone" type="tel"
                                                  placeholder="Ваш телефон *" minlength="17" maxlength="17"
                                                  required="required">
                                          </div>
                                      </li>
                                      <li>
                                          <div class="gl-input mail-i">
                                              <input name="f-email" type="text" placeholder="Ваша почта *"
                                                  required="required">
                                          </div>
                                      </li>
                                  </ul>
                              </fieldset>
                              <fieldset>
                                  <div class="gl-textarea edit-i">
                                      <textarea name="f-comment" placeholder="Ваше сообщение (не менее 20 символов) *" minlength="20" required="required"></textarea>
                                  </div>
                              </fieldset>
                              <fieldset>
                                  <span class="form-text">Поля отмеченные <span class="form-text__star">(
                                          <span>*</span> )</span> обязательны для заполнения!</span>
                              </fieldset>
                              <fieldset>
                                  <div class="gl-checkbox">
                                      <input id="send" type="checkbox" checked="checked">
                                      <label for="send">Нажимая кнопку "Отправить", вы принимаете <a
                                              href="data-processing.html" target="_blank">условия обработки
                                              персональных данных.</a></label>
                                  </div>
                              </fieldset>
                              <fieldset>
                                  <button class="btn-sm-size" type="submit">
                                      <span>Отправить сообщение</span>
                                  </button>
                              </fieldset>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div class="bt-indent">&nbsp;</div>
</div>

    <!-- modal Start -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                <div class="modal-content__in text-center">
                    <div class="success-form__icon">
                        <img src="{{asset('assets/frontend/img/bg/mail.svg"')}} alt="icon">
                    </div>
                    <span class="success-form__title">Ваши данные успешно отправлены.<br> Спасибо!</span>

                </div>
            </div>
        </div>
    </div>
@endsection

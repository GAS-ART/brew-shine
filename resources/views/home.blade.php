@extends('layout')

{{-- @section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('mainPopupPayload', 'Главная страница (' . url()->current() . ')') --}}

@section('content')
<!-- <h1>@lang('home.title')</h1> -->

<section class="hero">
  <div class="container hero-inner">
    <div class="hero-content">
      <h1>
        Химчистка мебели в Кишинёве —<br>
        быстро, безопасно, с гарантией
      </h1>
      <p class="subtitle">
        Чистим диваны, кресла, матрасы и ковры прямо у вас дома
      </p>

      <div class="hero-actions">
        <img src="img/hero/sofa.jpg" alt="Чистка мебели" class="hero-image">

        <div class="hero-buttons popup-btn">
          <a href="#order" class="btn btn-gold">Заказать химчистку</a>

          <div class="phone-block">
            <div class="phone">
              <span class="phone-icon">📞</span>
              <a href="tel:+37360123456">+373 (60) 123 456</a>
            </div>
            <p class="consult">Выезд сегодня · бесплатная консультация</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection


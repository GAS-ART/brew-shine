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
       @lang('home.hero.title')
      </h1>
      <p class="subtitle">
        @lang('home.hero.subtitle')
      </p>

      <div class="hero-actions">
        <img src="img/hero/sofa.jpg" alt="Чистка мебели" class="hero-image">

        <div class="hero-buttons popup-btn">
          <a href="#order" class="btn btn-gold">@lang('home.hero.button')</a>

          <div class="phone-block">
            <div class="phone">
              <span class="phone-icon">📞</span>
              <a href="tel:@lang('contacts.phone1_href')">@lang('contacts.phone1')</a>
            </div>
            <div class="phone">
              <span class="phone-icon">📞</span>
              <a href="tel:@lang('contacts.phone2_href')">@lang('contacts.phone2')</a>
            </div>
            <p class="consult">@lang('home.hero.consult')</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="benefits">
    <div class="container">
        <h2 class="benefits-title">@lang('home.benefits.title')</h2>
        <p class="benefits-subtitle">@lang('home.benefits.subtitle')</p>

        <div class="benefits-grid">
            <div class="benefit-item">
                <span class="benefit-icon"><i class="fas fa-soap"></i></span>
                <p>@lang('home.benefits.items.1')</p>
            </div>
            <div class="benefit-item">
                <span class="benefit-icon"><i class="fas fa-spray-can"></i></span>
                <p>@lang('home.benefits.items.2')</p>
            </div>
            <div class="benefit-item">
                <span class="benefit-icon"><i class="fas fa-clock"></i></span>
                <p>@lang('home.benefits.items.3')</p>
            </div>
            <div class="benefit-item">
                <span class="benefit-icon"><i class="fas fa-star"></i></span>
                <p>@lang('home.benefits.items.4')</p>
            </div>
            <div class="benefit-item">
                <span class="benefit-icon"><i class="fas fa-truck"></i></span>
                <p>@lang('home.benefits.items.5')</p>
            </div>
        </div>
    </div>
</section>



<section class="results">
    <div class="container">
        <h2 class="results-title">@lang('home.results.title')</h2>
        
        <div class="compare-list">
            <!-- Один элемент (до/после) -->
            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/before1.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/after1.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.1')</p>
            </div>

            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/before2.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/after2.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.1')</p>
            </div>


            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/before1.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/after1.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.1')</p>
            </div>

            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/before2.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/after2.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.1')</p>
            </div>
            

            <!-- Добавь аналогично еще несколько штук -->
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <h2 class="steps-title">@lang('home.steps.title')</h2>
        <p class="steps-subtitle">@lang('home.steps.subtitle')</p>

        <div class="steps-grid">
            <div class="step-item">
                <div class="step-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <p>@lang('home.steps.items.1')</p>
            </div>

            <div class="step-arrow">➝</div>

            <div class="step-item">
                <div class="step-icon">
                    <i class="fas fa-car"></i>
                </div>
                <p>@lang('home.steps.items.2')</p>
            </div>

            <div class="step-arrow">➝</div>

            <div class="step-item">
                <div class="step-icon">
                    <i class="fas fa-spray-can"></i>
                </div>
                <p>@lang('home.steps.items.3')</p>
            </div>

            <div class="step-arrow">➝</div>

            <div class="step-item">
                <div class="step-icon">
                    <i class="fas fa-couch"></i>
                </div>
                <p>@lang('home.steps.items.4')</p>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
  <h2>Отзывы о нашей химчистке мебели в Кишинёве</h2>

  <div class="reviews-wrapper">
    <!-- Левая стрелка -->
    <div class="swiper-button-prev"></div>

    <!-- Слайдер -->
    <div class="reviews-slider swiper">
      <div class="swiper-wrapper">
        <!-- Слайд -->
        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/elena.jpg" alt="Елена">
            <div>
              <h3>Елена</h3>
              <span>сектор Чеканы</span>
            </div>
          </div>
          <p>«После чистки диван выглядит как новый, рекомендую всем»</p>
        </div>

        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/vitalii.jpg" alt="Виталий">
            <div>
              <h3>Виталий</h3>
              <span>Ботаника</span>
            </div>
          </div>
          <p>«Приехали в тот же день, всё сделали аккуратно и быстро»</p>
        </div>

         <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/vitalii.jpg" alt="Виталий">
            <div>
              <h3>Виталий</h3>
              <span>Ботаника</span>
            </div>
          </div>
          <p>«Приехали в тот же день, всё сделали аккуратно и быстро»</p>
        </div>

        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/elena.jpg" alt="Елена">
            <div>
              <h3>Елена</h3>
              <span>сектор Чеканы</span>
            </div>
          </div>
          <p>«После чистки диван выглядит как новый, рекомендую всем»</p>
        </div>

        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/elena.jpg" alt="Елена">
            <div>
              <h3>Елена</h3>
              <span>сектор Чеканы</span>
            </div>
          </div>
          <p>«После чистки диван выглядит как новый, рекомендую всем»</p>
        </div>

        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/vitalii.jpg" alt="Виталий">
            <div>
              <h3>Виталий</h3>
              <span>Ботаника</span>
            </div>
          </div>
          <p>«Приехали в тот же день, всё сделали аккуратно и быстро»</p>
        </div>

         <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/vitalii.jpg" alt="Виталий">
            <div>
              <h3>Виталий</h3>
              <span>Ботаника</span>
            </div>
          </div>
          <p>«Приехали в тот же день, всё сделали аккуратно и быстро»</p>
        </div>

        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/elena.jpg" alt="Елена">
            <div>
              <h3>Елена</h3>
              <span>сектор Чеканы</span>
            </div>
          </div>
          <p>«После чистки диван выглядит как новый, рекомендую всем»</p>
        </div>

        <!-- остальные слайды -->
      </div>
    </div>

    <!-- Правая стрелка -->
    <div class="swiper-button-next"></div>
  </div>
</section>



@endsection


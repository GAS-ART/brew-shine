@extends('layout')

@section('title', __('titles.title'))
@section('description', __('titles.description'))
@section('ogTitle', __('titles.ogTitle'))
@section('ogDescription', __('titles.ogDescription'))

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
           <a href="tel:@lang('contacts.phone1_href')" class="phone">
                <i class="fas fa-phone phone-icon"></i>
                <span>@lang('contacts.phone1')</span>
            </a>

            <a href="tel:@lang('contacts.phone2_href')" class="phone">
                <i class="fas fa-phone phone-icon"></i>
                <span>@lang('contacts.phone2')</span>
            </a>
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
            {{--<div class="benefit-item">
                <span class="benefit-icon"><i class="fas fa-truck"></i></span>
                <p>@lang('home.benefits.items.5')</p>
            </div>--}}
        </div>
    </div>
</section>

<section id="results" class="results">
    <div class="container">
        <h2 class="results-title">@lang('home.results.title')</h2>
        
        <div class="compare-list">
            <!-- Один элемент (до/после) -->
            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/1_before.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/1_after.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.1')</p>
            </div>

            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/2_before.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/2_after.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.2')</p>
            </div>

           <div class="compare-item">
                <div class="compare">
                    <img src="img/results/3_before.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/3_after.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.3')</p>
            </div>

            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/4_before.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/4_after.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.4')</p>
            </div>

            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/5_before.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/5_after.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.5')</p>
            </div>

            <div class="compare-item">
                <div class="compare">
                    <img src="img/results/6_before.jpg" alt="Диван до чистки" class="compare-before">
                    <img src="img/results/6_after.jpg" alt="Диван после чистки" class="compare-after">
                    <input type="range" min="0" max="100" value="50" class="compare-slider">
                </div>
                <p class="compare-caption">@lang('home.results.captions.6')</p>
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

<section id="reviews" class="reviews">
  <h2>@lang('home.reviews.title')</h2>

  <div class="reviews-wrapper">
    <!-- Левая стрелка -->
    <div class="swiper-button-prev"></div>

    <!-- Слайдер -->
    <div class="reviews-slider swiper">
      <div class="swiper-wrapper">
        <!-- Слайд -->
        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/1.jpg" alt="@lang('home.reviews.items.1.name')">
            <div>
              <h3>@lang('home.reviews.items.1.name')</h3>
              <span>@lang('home.reviews.items.1.place')</span>
            </div>
          </div>
          <p>@lang('home.reviews.items.1.text')</p>
        </div>

        <div class="swiper-slide review-card">
          <div class="review-header">
            <img src="/img/reviews/2.jpg" alt="@lang('home.reviews.items.2.name')">
            <div>
              <h3>@lang('home.reviews.items.2.name')</h3>
              <span>@lang('home.reviews.items.2.place')</span>
            </div>
          </div>
          <p>@lang('home.reviews.items.2.text')</p>
        </div>

      <div class="swiper-slide review-card">
        <div class="review-header">
          <img src="/img/reviews/3.jpg" alt="@lang('home.reviews.items.3.name')">
          <div>
            <h3>@lang('home.reviews.items.3.name')</h3>
            <span>@lang('home.reviews.items.3.place')</span>
          </div>
        </div>
        <p>@lang('home.reviews.items.3.text')</p>
      </div>

      <div class="swiper-slide review-card">
        <div class="review-header">
          <img src="/img/reviews/4.jpg" alt="@lang('home.reviews.items.4.name')">
          <div>
            <h3>@lang('home.reviews.items.4.name')</h3>
            <span>@lang('home.reviews.items.4.place')</span>
          </div>
        </div>
        <p>@lang('home.reviews.items.4.text')</p>
      </div>

      <div class="swiper-slide review-card">
        <div class="review-header">
          <img src="/img/reviews/5.jpg" alt="@lang('home.reviews.items.5.name')">
          <div>
            <h3>@lang('home.reviews.items.5.name')</h3>
            <span>@lang('home.reviews.items.5.place')</span>
          </div>
        </div>
        <p>@lang('home.reviews.items.5.text')</p>
      </div>

      <div class="swiper-slide review-card">
        <div class="review-header">
          <img src="/img/reviews/6.jpg" alt="@lang('home.reviews.items.6.name')">
          <div>
            <h3>@lang('home.reviews.items.6.name')</h3>
            <span>@lang('home.reviews.items.6.place')</span>
          </div>
        </div>
        <p>@lang('home.reviews.items.6.text')</p>
      </div>
              <!-- остальные слайды -->
        </div>
      </div>

      <!-- Правая стрелка -->
      <div class="swiper-button-next"></div>
    </div>
</section>

<section id="prices" class="prices">
  <div class="container">
    <h2 class="section-title">@lang('home.price.title')</h2>

    <div class="price-grid">
      <div class="price-card">
        <h3>@lang('home.price.sofa.title')</h3>
        <p class="price">@lang('home.price.sofa.text')</p>
      </div>

      <div class="price-card">
        <h3>@lang('home.price.armchair.title')</h3>
        <p class="price">@lang('home.price.armchair.text')</p>
      </div>

      <div class="price-card">
        <h3>@lang('home.price.mattress.title')</h3>
        <p class="price">@lang('home.price.mattress.text')</p>
      </div>

      <div class="price-card">
        <h3>@lang('home.price.chair.title')</h3>
        <p class="price">@lang('home.price.chair.text')</p>
      </div>
    </div>

    <div class="price-action popup-btn">
      <a href="#order" class="btn btn-gold">Узнать точную стоимость</a>
    </div>
  </div>
</section>

<section class="cta">
  <div class="cta-overlay">
    <div class="container">
      <div class="cta-content">
        <h2>Закажите химчистку мебели прямо сейчас</h2>
        <p class="cta-subtitle">Приедем сегодня. Работаем по всему Кишинёву.</p>

        <!-- Кнопка звонка -->
        <div class="cta-buttons single">
          <a href="tel:@lang('contacts.phone1_href')" class="btn-gold">Позвонить</a>
        </div>

        <!-- Кнопки мессенджеров -->
        <div class="cta-buttons messengers">
          <a href="@lang('contacts.viber')" class="btn-messenger">
            <i class="fab fa-viber"></i> Viber
          </a>

          <a href="@lang('contacts.whatsup')" target="_blank" class="btn-messenger">
            <i class="fab fa-whatsapp"></i> WhatsApp
          </a>

          <a href="@lang('contacts.tg')" target="_blank" class="btn-messenger">
            <i class="fab fa-telegram-plane"></i> Telegram
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection


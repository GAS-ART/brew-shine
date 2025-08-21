@section('header')
@php
    // Поддерживаемые локали
    $locales = ['ro' => 'Rom', 'ru' => 'Рус', 'en' => 'EN'];

    // Текущие сегменты пути и query-string
    $segments = request()->segments();
    $firstSegment = $segments[0] ?? null;
    $query = request()->getQueryString();
@endphp

<header class="site-header">
    <div class="container header-inner">
        <!-- Бургер (только для мобилок) -->
        <div class="burger" id="burger" aria-label="Открыть меню" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Логотип -->
        <div class="logo">
            <a href="/">
                <img src="{{ asset('img/logo.jpg') }}" alt="Brew & Shine">
            </a>
        </div>

        <!-- Горизонтальное меню (ПК) -->
        <nav class="main-nav" id="mainNavDesktop" aria-label="Главное меню">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Цены</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>

        
        <div class="lang-switcher" aria-label="Выбор языка">
            @foreach($locales as $code => $label)
               @php
                     $newSegments = $segments;

                     // если первый сегмент — язык, заменяем его, иначе добавляем в начало
                     if (in_array($firstSegment, array_keys($locales))) {
                        $newSegments[0] = $code;
                     } else {
                        array_unshift($newSegments, $code);
                     }

                     $path = implode('/', $newSegments);
                     $url = url($path ?: $code);
                     if ($query) $url .= '?' . $query;
               @endphp

               <a href="{{ $url }}" class="lang-link" rel="alternate" hreflang="{{ $code }}" title="{{ $label }}">
                     {{-- Можно заменить emoji на <img src="{{ asset('images/flags/'.$code.'.svg') }}"> --}}
                     @if($code === 'ru') 🇷🇺 @elseif($code === 'ro') 🇲🇩 @else 🇬🇧 @endif
                     <span class="sr-only">{{ $label }}</span>
               </a>
            @endforeach
      </div>

        <!-- Кнопка заказа (видна и на ПК и на мобилке) -->
        <div class="header-btn">
            <a href="#order" class="btn">Заказать чистку</a>
        </div>
    </div>

    <!-- Off-canvas меню (мобилки) -->
    <nav class="side-nav" id="sideNav" aria-label="Мобильное меню">
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Цены</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
</header>


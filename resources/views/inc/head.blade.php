@section('head')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- FAVICON https://favicon.io/favicon-converter/  --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }} ">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">

        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('ogTitle')" />
        <meta property="og:description" content="@yield('ogDescription')" />
        <meta property="og:site_name" content="service-chisto.com.ua" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


         @vite([
            'resources/css/app.css', 
            'resources/css/hero.css',
            'resources/css/benefits.css',
            'resources/css/results.css',
            'resources/css/steps.css',
            'resources/css/reviews.css',
            'resources/css/prices.css',
            'resources/css/cta.css',
            'resources/js/app.js'
            ])
    </head>

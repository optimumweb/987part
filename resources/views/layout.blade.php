<!DOCTYPE html>
<html lang="{{ $site->locale->name }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ isset($title) ? "{$title} | {$site->name}" : "{$site->description} | {$site->name}" }}</title>

        @if ($favicon = $site->theme()->setting('favicon'))
            <link rel="icon" href="{{ $favicon }}" />
        @endif

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ $site->theme()->asset('css/theme.css') }}" />

        @if ($fontawesome = $site->theme()->config('fontawesome'))
            <script src="https://kit.fontawesome.com/{{ $fontawesome }}.js" crossorigin="anonymous"></script>
        @endif

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>

        <script src="{{ $site->theme()->asset('js/theme.js') }}" defer></script>
    </head>
    <body>
        <header id="site-header">
            <div class="container is-max-desktop">
                <div class="columns">
                    <div class="column is-6">
                        <div id="site-title">
                            @if ($logo = $site->theme()->setting('logo'))
                                <h1 id="site-name">
                                    <a href="{{ $site->home() }}">
                                        <img
                                            id="site-logo"
                                            src="{{ $logo }}"
                                            alt="{{ $site->name }} - {{ $site->description }}"
                                        />
                                    </a>
                                </h1>
                            @else
                                <h1 id="site-name" class="title">
                                    <a href="{{ $site->home() }}">
                                        {{ $site->name }}
                                    </a>
                                </h1>

                                <h2 id="site-description" class="subtitle">
                                    {{ $site->description }}
                                </h2>
                            @endif
                        </div>
                    </div>

                    <div class="column is-6">
                        <div id="site-info">
                            {{ $site->trans('layout.header.questions') }}<br />
                            {{ $site->trans('layout.header.currency') }}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <nav id="site-nav">
            <div class="container is-max-desktop">
                {!! $site->menu('primary') !!}
            </div>
        </nav>

        <main id="site-content">
            @yield('content')
        </main>

        <footer id="site-footer" class="footer">
            <div class="content has-text-centered">
                <p id="copy">&copy; {{ $site->name }} {{ now()->format('Y') }}</p>
            </div>
        </footer>
    </body>
</html>

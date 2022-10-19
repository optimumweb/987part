@extends('layout')

@section('content')
    <section class="section">
        <div class="container is-max-desktop">
            <div class="slideshow">
                <ul>
                    <li>
                        <img
                            src="{{ $site->theme()->asset('img/slide-1.jpg') }}"
                            width="1000"
                            height="320"
                            alt="{{ $site->trans('home.slide1') }}"
                        />
                    </li>

                    <li>
                        <img
                            src="{{ $site->theme()->asset('img/slide-2.jpg') }}"
                            width="1000"
                            height="320"
                            alt="{{ $site->trans('home.slide2') }}"
                        />
                    </li>

                    <li>
                        <img
                            src="{{ $site->theme()->asset('img/slide-3.jpg') }}"
                            width="1000"
                            height="320"
                            alt="{{ $site->trans('home.slide3') }}"
                        />
                    </li>

                    <li>
                        <img
                            src="{{ $site->theme()->asset('img/slide-4.jpg') }}"
                            width="1000"
                            height="320"
                            alt="{{ $site->trans('home.slide4') }}"
                        />
                    </li>

                    <li>
                        <img
                            src="{{ $site->theme()->asset('img/slide-5.jpg') }}"
                            width="1000"
                            height="320"
                            alt="{{ $site->trans('home.slide5') }}"
                        />
                    </li>
                </ul>

                <a class="prev icon"><i class="fa-solid fa-chevron-left"></i></a>
                <a class="next icon"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <hr />

    <section class="section">
        <div class="container is-max-desktop">
            <h3 class="title is-3">
                {{ $site->trans('home.shopForParts') }}
            </h3>

            <div class="columns">
                @foreach ($site->taxonomies('model')->get() as $model)
                    <div class="column is-3 has-text-centered">
                        <h4 class="title is-4">
                            <a href="{{ $model->getUrl('part') }}">
                                @isset($model->cover, $model->cover->url)
                                    <img
                                        src="{{ $model->cover->url }}"
                                        alt="{{ $model }}"
                                    /><br />
                                @endisset

                                <span>{{ $model }}</span>
                            </a>
                        </h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <hr />

    <section class="section">
        <div class="container is-max-desktop">
            <div class="content">
                {!! $site->trans('home.content') !!}
            </div>
        </div>
    </section>
@endsection

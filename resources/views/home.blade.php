@extends('layouts.default')

@section('content')
    <section class="section">
        <div class="container">
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
                </ul>
            </div>
        </div>
    </section>
@endsection

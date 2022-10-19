@extends('layout')

@section('content')
    <section class="section">
        <div class="container is-max-desktop">
            <h3 class="subtitle">
                {{ $taxonomy->type }}
            </h3>

            <h1 class="title is-1">
                {{ $taxonomy }}
            </h1>

            @if (isset($entries) && $entries->count() > 0)
                <div class="columns is-multiline">
                    @foreach ($entries as $entry)
                        <div class="column is-4">
                            @include('partials.entry')
                        </div>
                    @endforeach
                </div>

                {{ $entries->appends(request()->input())->links('partials.pagination') }}
            @else
                <p>{{ $site->trans('general.noEntries') }}</p>
            @endif
        </div>
    </section>
@endsection

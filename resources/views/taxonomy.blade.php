@extends('layout')

@section('content')
    <section class="section">
        <div class="container is-max-desktop">
            <h1 class="title is-1">
                {{ $taxonomy }}
            </h1>

            @if (isset($taxonomy->entries) && $taxonomy->entries->count() > 0)
                <div class="columns is-multiline">
                    @foreach ($taxonomy->entries as $entry)
                        <div class="column is-4">
                            @include('partials.entry')
                        </div>
                    @endforeach
                </div>
            @else
                <p>{{ $site->trans('general.noEntries') }}</p>
            @endif
        </div>
    </section>
@endsection

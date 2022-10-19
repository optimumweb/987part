@extends('layouts.default')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title is-1">
                {{ $taxonomy }}
            </h1>

            @if (isset($taxonomy->entries) && $taxonomy->entries->count() > 0)

            @else
                <p>{{ $site->trans('general.noEntries') }}</p>
            @endif
        </div>
    </section>
@endsection

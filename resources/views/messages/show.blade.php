@extends('layouts.app')

@section('content')
    <div class="container main-content">
        <div class="columns">
            <div class="column is-three-quarters">
                 @include('partials._message')
            </div>

            @include('partials._sidebar')
        </div>
    </div>
@endsection

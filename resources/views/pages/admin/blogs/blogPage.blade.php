@extends('layouts.app')

@section('content')
    <br>
    @foreach ($links as $item)
    @endforeach

    <div class="container mb-4">
        {!! html_entity_decode($item->title) !!}

    </div>
@endsection

@section('footer_scripts')
@endsection

@extends('layouts.app')
@section('title', 'Comics')

@section('content')
    <section>
        <div>
            @foreach ($comicscard as $item)
                <div>
                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                    <div>
                        <div><a href="">{{ $item['title'] }}</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
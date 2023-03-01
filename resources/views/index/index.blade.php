@extends('layouts.main', [
    'current_menu_item' => 'homepage'
])
@section('content')
    <h1>Homepage</h1>
    @guest
        <p><a href="{{route('register')}}">Register</a> or <a href="{{route('login')}}">Log in</a></p>
    @endguest

    <h2>Crime books</h2>

    <div class="crime-books">

        @foreach($crime_books as $book)
        <div class="crime-books_book">
            <h3>{{$book->title}}</h3>
            Authors: {{ $book->authors->pluck('name')->join(', ') }}<br>
            Publisher: {{ $book->publishers->pluck('name')->join(', ') }}
        </div>
        @endforeach
    </div>
    <div id="partners"></div>
    @viteReactRefresh
    @vite('resources\js\partners.jsx')

    <div id="latest-books"></div>
    @vite('resources\js\latest-books.js')
@endsection
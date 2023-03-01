@extends('layouts.author',[
    'current_menu_item' => 'admin-authors'
])
@section('content')
<div class="wrapper">
    <h1 class="author-name">{{$author->name}}</h1>
    <ul class="book-list">
      @foreach ($books as $book)
      <li class="book-card">
        <div class="book-card-content">
          <h2 class="book-title">{{$book->title}}</h2>
          <p class="book-description">{{$book->description}}</p>
        </div>
        <div class="book-card-image">
          <img class="book-image" src="{{$book->image}}" alt="{{$book->title}}">
        </div>
      </li>
      @endforeach
    </ul>
  </div>  
@endsection
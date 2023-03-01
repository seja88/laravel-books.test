@extends('layouts.author',[
    'current_menu_item' => 'admin-authors'
])
@section('content')
<form action="{{route('authors.search')}}" method="get">
<br>Author Name:
<input type="text" name="name">
<button type="submit">Search</button>
</form>

<h1>List of Authors</h1>
<ul>
    @foreach ($authors as $author)
        <li class="nav-link nav-link-grow-up">
            <a href="{{route('authors.detail', $author)}}">
                {{$author->name}}
                {{-- <br>ID:{{$author->id}} --}}
            </a>
        </li>
    @endforeach
</ul>
@endsection


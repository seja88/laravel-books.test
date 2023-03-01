@extends('layouts.author',[
    'current_menu_item' => 'admin-authors'
])
@section('content')
<h1>Create new Author</h1>
<label for="name">Fullname:</label><br>
<input type="text" name="name" value="{{ old('name', $author->name) }}">
<button type="submit">Create</button>
@endsection
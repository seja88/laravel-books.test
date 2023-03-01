@extends('layouts.main')

@section('content')
    <h1>List of Users</h1>

    <div id="root"></div>
    @viteReactRefresh
    @vite('resources/js/user-list/user-list.jsx')
@endsection
<nav class="navbar">
      {{-- ADMIN --}}

      @can('admin')
      <a class="nav-link nav-link-grow-up" >
            <strong>ADMIN</strong>  
        </a>  
    @endcan
    {{-- HOME PAGE --}}

    <a class="nav-link nav-link-grow-up" href="{{route('homepage')}}">
        @if($current_menu_item === 'homepage')
            <strong>Home</strong>        
        @else
            Home
        @endif
    </a>
{{-- ABOUT US PAGE --}}

    <a class="nav-link nav-link-grow-up" href="{{route('about-us')}}">
        @if($current_menu_item === 'about-us')
            <strong>About</strong>    
        @else 
            About   
        @endif 
    </a>
    {{-- ADMIN PAGE --}}

    <a class="nav-link nav-link-grow-up" href="{{route('admin-authors')}}">
        @if($current_menu_item === 'admin-authors')
            <strong>Authors</strong>    
        @else 
            Authors   
        @endif 
    </a>

    {{-- NEW AUTHOR --}}
    <a class="nav-link nav-link-grow-up" href="{{route('authors.create')}}">
        @if($current_menu_item === 'authors.create')
            <strong>New Author</strong>    
        @else 
            New Author   
        @endif 
    </a>
 {{-- IF NOT LOGIN --}}
@guest
{{-- REGISTRATION --}}
<a class="nav-link nav-link-grow-up" href="{{route('register')}}">Register</a>

{{-- SIGN IN (LOG IN) --}}

<a class="nav-link nav-link-grow-up" href="{{route('login')}}">Sign in</a>
@endguest


{{-- IF USER IS LOGGED IN --}}
@auth
{{-- auth function and user function --}}
    <h3>Looged in as {{auth()->user()->name}}</h3> 
    {{-- LOG OUT --}}
<form action="{{ route('logout') }}" method="post">
 
    @csrf
 
    <button class="nav-link nav-link-grow-up">Logout</button>
 
</form>
@endauth



</nav>
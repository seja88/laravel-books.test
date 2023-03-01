@include('common.html_start')
@include('common.navigation', [
    'current_menu_item' => $current_menu_item
])

@yield('content')


@include('common.html_end')
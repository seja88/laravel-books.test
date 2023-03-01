@include('common.html_start')
@include('common.navigation', [
    'current_menu_item' => $current_menu_item ?? null
])

@yield('content')


@include('common.html_end')
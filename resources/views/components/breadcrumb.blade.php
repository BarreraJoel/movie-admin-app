<div class="breadcrumbs">
    <ul>
        @foreach ($routes as $route)
            <li class="breadcrumbs-separator rtl:-rotate-[40deg]">/</li>
            <li>
                @if(!isset($route['param_value']))
                    <a href="{{ route($route['url']) }}">{{ $route['name'] }}</a>
                @else
                    <a href="{{ route($route['url'], [$route['param_name'] => $route['param_value']]) }}">{{ $route['name'] }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</div>
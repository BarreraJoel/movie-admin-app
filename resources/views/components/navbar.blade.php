<div>
    <nav class="bg-slate-900 p-3 flex items-center">
        <div class="w-1/4">
            <h3>PELICULAS</h3>
        </div>
        <div class="w-3/4">
            <ul id="navbar" class="flex justify-end items-center">
                <li>
                    <a href="{{ route('home') }}">
                        INICIO
                    </a>
                </li>
                <li>
                    <div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
                        <a aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown" id="dropdown">
                            PELICULAS
                        </a>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                            aria-orientation="vertical" aria-labelledby="dropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('movies.index') }}">
                                    Ver todos
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('movies.create') }}">
                                    Crear
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @if (Auth::user())
                    <li>
                        @include('components.dropdown-avatar', ['user' => Auth::user()])
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>
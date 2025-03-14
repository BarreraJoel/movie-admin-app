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
                    <div class="relative inline-flex group rtl:[--placement:bottom-end]">
                        <a href="{{ route('movies.index') }}">
                            PELICULAS
                        </a>
                        
                        <ul class="absolute mt-7 w-48 dropdown-menu shadow-lg opacity-0 invisible transition-all duration-200 ease-in-out group-hover:opacity-100 group-hover:visible">
                            <li>
                                <a href="{{ route('movies.create') }}" class="dropdown-item">
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
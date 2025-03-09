<div>
    <nav class="bg-blue-950">
        <ul class=" flex justify-around">
            <li>
                CATEGORIAS
                <ul>
                    @foreach ($categories as $category)
                        <a href="">
                            <li>{{$category->name}}</li>
                        </a>
                    @endforeach
                </ul>
            </li>
            @if (Auth::user())
                <li>
                    Name:
                    {{Auth::user()->name}}
                </li>
                <li>
                    Roles:
                    @foreach (Auth::user()->roles as $role)
                        {{$role->name}}
                    @endforeach
                </li>
            @endif
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-error">
                        Cerrar Sesión
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</div>
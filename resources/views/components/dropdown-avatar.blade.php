<div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">

    <button id="dropdown-avatar" type="button"
        class="dropdown-toggle btn btn-soft btn-primary flex items-center gap-2 rounded-full" aria-haspopup="menu"
        aria-expanded="false" aria-label="Dropdown">

        <div class="@if(!$user->image_url)avatar placeholder @endif">
            <div class="@if(!$user->image_url) bg-info/20 text-info w-7 @endif rounded-full">
                @if ($user->image_url)
                    <img src="{{asset('storage') . "/" .$user->image_url}}" alt="avatar" class="size-6 rounded-full"/>
                @else
                    <span class="text-md uppercase">{{ $user->name[0] }}</span>
                @endif
            </div>
        </div>

        {{ $user->name }}
        <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
    </button>

    <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical"
        aria-labelledby="dropdown-avatar">
        <li class="dropdown-header gap-3">

            <div class="@if(!$user->image_url)avatar placeholder @endif">
                <div class="@if(!$user->image_url) bg-info/20 text-info w-10 @endif rounded-full">
                    @if ($user->image_url)
                        <img src="{{asset('storage') . "/" . $user->image_url}}" alt="avatar" class="size-10 rounded-full"/>
                    @else
                        <span class="text-lg uppercase">{{ $user->name[0] }}</span>
                    @endif
                </div>
            </div>

            <div>
                <h6 class="text-base-content text-base font-semibold">{{ $user->name }}</h6>
                <small class="text-base-content/50 text-sm font-normal">{{ $user->email }}</small>
            </div>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('users.show', ['user' => Auth::user()->id]) }}">
                Perfil
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-error">
                    <span class="icon-[tabler--logout] size-5"></span> Cerrar Sesión
                </button>
            </form>
        </li>

    </ul>
</div>
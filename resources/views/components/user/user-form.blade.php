<div>
    <form action="{{ route('users.update', $user) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">

        <div>
            @include(
                'components.form.input',
                [
                    'type' => 'text',
                    'input_name' => 'name',
                    'input_text' => 'Nombre',
                    'placeholder' => 'Ingrese el nombre',
                    'value' => $user->name,
                ]
            )
        </div>

        <div>
            @include(
                'components.form.input',
                [
                    'type' => 'email',
                    'input_name' => 'email',
                    'input_text' => 'Email',
                    'placeholder' => 'Ingrese el email',
                    'value' => $user->email,
                ]
            )
        </div>
        
        <button type="submit" class="btn btn-soft btn-warning" aria-haspopup="dialog" aria-expanded="false"
        aria-controls="basic-modal" data-overlay="#basic-modal"><span class="icon-[tabler--refresh]"></span> Actualizar</button>

    </form>
</div>
<div>
    <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="">
            @include(
                'components.form.input',
                [
                    'type' => 'text',
                    'input_name' => 'name',
                    'input_text' => 'Nombre',
                    'placeholder' => 'Ingrese el nombre',
                ]
            )
        </div>
        <div class="">
            @include(
                'components.form.text-area',
                [
                    'input_name' => 'description',
                    'input_text' => 'Descripción',
                    'placeholder' => 'Ingrese una descripción',
                ]
            )
        </div>
        <div class="flex gap-4 horizontal-scrollbar">
            @livewire(
                'form.checkbox',
                [
                    'data' => $categories,
                    'input_name' => 'categories[]',
                    'input_text' => 'Elija las categorias'
                ]
            )
        </div>
        <div class="">
            @include(
                'components.form.input-file',
                [
                    'input_name' => 'image_url',
                    'input_text' => 'Imagen',
                ]
            )
        </div>
        <div class="">
            @include(
                'components.form.input',
                [
                    'type' => 'number',
                    'input_name' => 'duration',
                    'input_text' => 'Duración (segundos)',
                    'placeholder' => 'Ingrese la duración',
                ]
            )
        </div>
        <div class="">
            @include(
                'components.form.input',
                [
                    'type' => 'number',
                    'input_name' => 'price',
                    'input_text' => 'Precio',
                    'placeholder' => 'Ingrese el precio',
                ]
            )
        </div>


        <button type="submit" class="btn btn-soft btn-primary">
            Agregar
        </button>

    </form>
</div>
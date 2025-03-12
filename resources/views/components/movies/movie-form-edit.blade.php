<div>
    <form action="{{ route('movies.update', $movie) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="_method" value="patch">

        <div class="">
            @include(
                'components.form.input',
                [
                    'type' => 'text',
                    'input_name' => 'name',
                    'input_text' => 'Nombre',
                    'placeholder' => 'Ingrese el nombre',
                    'value' => $movie->name,
                ]
            )
        </div>
        @error('name')
            <small class="text-error">
                {{ $message }}
            </small>
        @enderror

        <div class="">
            @include(
                'components.form.text-area',
                [
                    'input_name' => 'description',
                    'input_text' => 'Descripción',
                    'placeholder' => 'Ingrese una descripción',
                    'value' => $movie->description,
                ]
            )
        </div>
        @error('description')
            <small class="text-error">
                {{ $message }}
            </small>
        @enderror

        <div class="">
            @include(
                'components.form.input',
                [
                    'type' => 'number',
                    'input_name' => 'age',
                    'input_text' => 'Año de estreno',
                    'placeholder' => 'Ingrese el año',
                    'value' => $movie->age,
                ]
            )
        </div>
        @error('age')
            <small class="text-error">
                {{ $message }}
            </small>
        @enderror

        <div class="flex gap-4 horizontal-scrollbar">
            @livewire(
                'form.checkbox',
                [
                    'data' => $categories,
                    'input_name' => 'categories[]',
                    'input_text' => 'Elija las categorias',
                    'value' => $movie->categories
                ]
            )
        </div>
        @error('categories')
            <small class="text-error">
                {{ $message }}
            </small>
        @enderror

        <div class="">
            @include(
                'components.form.input-file',
                [
                    'input_name' => 'image_url',
                    'input_text' => 'Imagen',
                ]
            )
        </div>
        @error('image_url')
            <small class="text-error">
                {{ $message }}
            </small>
        @enderror

        <div class="">
            @include(
                'components.form.input',
                [
                    'type' => 'number',
                    'input_name' => 'duration',
                    'input_text' => 'Duración (segundos)',
                    'placeholder' => 'Ingrese la duración',
                    'value' => $movie->duration,
                ]
            )
        </div>
        @error('duration')
            <small class="text-error">
                {{ $message }}
            </small>
        @enderror

        <div class="">
            @include(
                'components.form.input',
                [
                    'type' => 'number',
                    'input_name' => 'price',
                    'input_text' => 'Precio',
                    'placeholder' => 'Ingrese el precio',
                    'value' => $movie->price,
                ]
            )
        </div>
        @error('price')
            <small class="text-error">
                {{ $message }}
            </small>
        @enderror

        <button type="submit" class="btn btn-soft btn-primary">
            Editar
        </button>

    </form>
</div>
<div class="">
    <label for="">{{$input_text}}</label>

    <div class="flex">

        @foreach ($data as $item)
            <div class="flex justify-around p-2">
                <input wire:model.lazy="selected" type="checkbox" class="checkbox checkbox-primary" value="{{$item->id}}"
                    name="{{$input_name}}" id="checkbox-{{ $item->id }}">
                <label class="label label-text text-base" for="checkbox-{{ $item->id }}">
                    {{ $item->name }}
                </label>
            </div>
        @endforeach


    </div>

</div>
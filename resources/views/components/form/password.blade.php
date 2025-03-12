<div class="input-group max-w-sm">
    <div class="relative w-full">
        <input id="{{ $input_name }}" type="password" class="input input-floating peer"
            placeholder="Ingrese la contraseña" name="{{ $input_name }}" value="@if (!empty($value)){{$value}}@endif"/>
        <label class="input-floating-label" for="{{ $input_name }}">{{ $input_text }}</label>
    </div>
    <span class="input-group-text">
        <button type="button" data-toggle-password='{ "target": "#{{ $input_name }}" }' class="block" aria-label="password toggle">
            <span class="icon-[tabler--eye] text-base-content/80 password-active:block hidden size-5 flex-shrink-0"></span>
            <span class="icon-[tabler--eye-off] text-base-content/80 password-active:hidden block size-5 flex-shrink-0"></span>
        </button>
    </span>
</div>
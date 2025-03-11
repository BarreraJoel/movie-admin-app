<div class="relative w-96">
    <input type="{{ $type }}" class="input input-floating peer" name="{{ $input_name }}" placeholder="{{ $placeholder }}" id="floatingInput" value="@if (!empty($value)){{ $value }}@endif" />
    <label class="input-floating-label" for="floatingInput">{{ $input_text }}</label>
</div>
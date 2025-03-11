<div class="relative sm:w-96">
    <textarea class="textarea textarea-floating peer" name="{{ $input_name }}" placeholder="{{ $placeholder }}" id="textareaFloating">@if (!empty($value)){{ $value }}@endif</textarea>
    <label class="textarea-floating-label" for="textareaFloating">{{ $input_text }}</label>
</div>
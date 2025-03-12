<div id="basic-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
    <div class="modal-dialog overlay-open:opacity-100">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ $title }}</h3>
                <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                    data-overlay="#basic-modal">
                    <span class="icon-[tabler--x] size-4"></span>
                </button>
            </div>
            <div class="modal-body">
                {{ $body }}
            </div>
            <form action="{{ route('movies.destroy', $movie) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="delete">

                <div class="modal-footer">
                    <button type="button" class="btn btn-soft btn-secondary" data-overlay="#basic-modal">{{ $cancelacion }}</button>
                    <button type="submit" class="btn btn-soft btn-primary">{{ $confirmacion }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
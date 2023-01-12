
<div class="image-preview">
    <div class="actual-image-thumbnail">
        <img class="img-thumbnail img-tag img-responsive" src="{{ thumbnail_url($upload) }}" />
        <input type="hidden" name="image_ids[]" value="{{ $upload->id }}"/>

    </div>
    <div class="image-info">
        <div class="image-title">
        </div>
        <div class="actions">
            <div class="action-buttons">
                <button type="button" class="btn btn-sm btn-danger destroy-image" title="Remove file" data-id="{{ $upload->id }}">
                    <i class="fa fa-minus-circle"></i>
                </button>
            </div>
        </div>
    </div>
</div>
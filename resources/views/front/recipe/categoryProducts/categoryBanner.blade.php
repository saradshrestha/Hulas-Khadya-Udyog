<div class = "header-wrapper">
    <div class = "">
        @if (isset($category) && $category != null)
            <div class = "header-content align-items-center">
                <div class = "" data-aos = "fade-left">
                    <img src = "{{ getOrginalUrl($category->banner) }}" alt = "{{ $category->title }}" class = "mx-auto">
                </div>
            </div>
        @endif          
    </div>

</div>

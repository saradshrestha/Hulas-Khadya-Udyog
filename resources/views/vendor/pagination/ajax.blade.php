@if ($paginator->hasPages())
    <nav>
        <input type="hidden" id="default_page_info" value="{{ $paginator->currentPage() }}"> 
        <ul class="pagination justify-content-center pagination-primary">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true"><span aria-hidden="true">&lsaquo;</span></span>
                </li>
            @else
                <li class="page-item">
                    <a data-page="{{ $paginator->currentPage() - 1 }}" class="page-link" rel="prev"
                        aria-label="@lang('pagination.previous')"><span aria-hidden="true">&lsaquo;</span></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span
                            class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span
                                    class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a data-page="{{ $page }}" class="page-link"
                                    >{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a data-page="{{ $paginator->currentPage() + 1 }}" class="page-link" rel="next"
                        aria-label="@lang('pagination.next')"> <span aria-hidden="true">&rsaquo;</span></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true"> <span aria-hidden="true">&rsaquo;</span></span>
                </li>
            @endif
        </ul>
    </nav>


@endif
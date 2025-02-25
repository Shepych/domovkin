@if ($paginator->hasPages())
    <div class="pagination">

        @if ($paginator->onFirstPage())
            <div class="pagination__item disabled">
                @if($paginator->onFirstPage() != $paginator->currentPage())
                    @include('svg.left-arrow')
                @endif
            </div>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination__item">
                @include('svg.left-arrow')
            </a>
        @endif


        <div class="pagination__item pagination__current__page">
            {{$paginator->currentPage()}}
        </div>


        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination__item">
                @include('svg.right-arrow')
            </a>
        @else
            <div class="pagination__item disabled">
                @if($paginator->currentPage() != $paginator->lastPage())
                    @include('svg.right-arrow')
                @endif
            </div>
        @endif
    </div>
@endif
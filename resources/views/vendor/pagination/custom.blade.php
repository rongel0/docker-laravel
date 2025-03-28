@if ($paginator->hasPages())
    <nav class="pager">
        <ul class="pagination justify-content-center">
            {{-- 前へボタン --}}
            @if (!$paginator->onFirstPage())
                <li class="page-item">
                    <a class="pager-prev" href="{{ $paginator->previousPageUrl() }}">
                        <i class="fas fa-angle-left"></i>
                    </a>
                </li>
            @endif

            {{-- ページ番号 --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link" href="#">{{ $page }} <span class="sr-only">(current)</span></a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- 次へボタン --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="pager-next" href="{{ $paginator->nextPageUrl() }}">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif

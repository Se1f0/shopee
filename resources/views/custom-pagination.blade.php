<div class="col-lg-6 col-md-6">
    @if ($paginator->hasPages())
    <ul class="pagination-box pt-xs-20 pb-xs-15">
        @if (!$paginator->onFirstPage())
        <li wire:click="previousPage"><a href="#" class="Previous"><i class="fa fa-chevron-left"></i>
                Previous</a>
        </li>
        @endif
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li wire:click="gotoPage({{$page}})" class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li wire:click="gotoPage({{$page}})"><a href="#">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
        <li wire:click="nextPage">
            <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
        </li>
        @endif
    </ul>
    @endif
</div>
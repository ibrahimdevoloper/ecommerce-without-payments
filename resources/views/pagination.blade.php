@if ($paginator->hasPages())
    <div class="row">
        <div class="col-sm-12 col-md-auto">
            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                Showing {{($paginator->currentPage()-1)*$paginator->perPage()+1}} to {{($paginator->currentPage()-1)*$paginator->perPage()+$paginator->count()}} of {{$paginator->total()}} entries
            </div>
        </div>
        <div class="col-sm-12 col-md-1">
            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                    {{-- need to customize this previous button --}}
                    @if ($paginator->currentPage()==1)
                        <li class="paginate_button page-item previous disabled" id="example2_previous">
                            <a href=""
                            aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">
                                Previous
                            </a>
                        </li>
                    @else
                        <li class="paginate_button page-item previous" id="example2_previous">
                            <a href={{$paginator->previousPageUrl()}} aria-controls="example2"
                            data-dt-idx="0" tabindex="0" class="page-link">
                            Previous
                            </a>
                        </li>
                    @endif


                    @for($i=0;$i<$paginator->lastPage();$i++)
                        @if ($paginator->currentPage()==$i+1)
                            <li class="paginate_button page-item active">
                                <a href={{$paginator->url($i+1)}} aria-controls="example2" data-dt-idx={{$i+1}}
                                tabindex="0" class="page-link">
                                {{$i+1}}
                                </a>
                            </li>
                        @else
                            <li class="paginate_button page-item ">
                                <a href={{$paginator->url($i+1)}} aria-controls="example2" data-dt-idx={{$i+1}}
                                tabindex="0" class="page-link">{{$i+1}}
                                </a>
                            </li>
                        @endif
                    @endfor
                    {{-- need to customize this next button --}}
                    @if ($paginator->currentPage()==$paginator->lastPage())
                        <li class="paginate_button page-item next disabled" id="example2_previous">
                            <a href=""
                            aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">
                            next
                            </a>
                        </li>
                    @else
                        <li class="paginate_button page-item next" id="example2_previous">
                            <a href={{$paginator->nextPageUrl()}} aria-controls="example2"
                            data-dt-idx="0" tabindex="0" class="page-link">
                            next
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
@endif

@if ($paginator->hasPages())
    <div class="row">
        <div class="col-sm-12 col-md-10">
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

                    {{-- <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1"
                            tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2"
                            tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3"
                            tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4"
                            tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5"
                            tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6"
                            tabindex="0" class="page-link">6</a></li> --}}
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

                    {{-- <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2"
                            data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
@endif

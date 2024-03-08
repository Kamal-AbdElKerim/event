
            @foreach ($events as $event)
                
         
            <!-- Start Single Event -->
            <div class="single-event">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="date">
                            {{-- <h2>{{ $event->Nombre_De_Places }} </h2> --}}
                            <p class="me-5 text-center align-items-center ">{{ $event->Nombre_De_Places }}<span>Tickets</span></p>

                            <p >{{  date("Y-m-d", strtotime($event->Date_start)) }}<span>{{  date("Y-m-d", strtotime($event->Date_end)) }}</span></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="event-info">
                            <div class="image">
                                <img src="assets/images/events/event1.jpg" alt="#">
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="javascript:void(0)">{{ $event->title }}</a>
                                </h4>
                                <ul>
                                    <li><i class="lni lni-user"></i>
                                        <a href="javascript:void(0)"> By: {{ $event->user->name }}</a>
                                    </li>
                                    <li><i class="lni lni-map-marker"></i>
                                        <a href="javascript:void(0)"> At: {{ $event->city }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-12">
                        <div class="button">
                            <a class="btn" href="{{ route('events_single',$event->id) }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Event -->
            @endforeach

            <div class="pagination left blog-grid-page" id="ajax_search_pagination">
                <ul class="pagination-list">
                    {{-- Previous Page Link --}}
                    @if ($events->onFirstPage())
                        <li class="disabled"><span>Prev</span></li>
                    @else
                        <li><a href="{{ $events->previousPageUrl() }}">Prev</a></li>
                    @endif
            
                    {{-- Pagination Elements --}}
                    @for ($page = 1; $page <= $events->lastPage(); $page++)
                        @if ($page == $events->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $events->url($page) }}">{{ $page }}</a></li>
                        @endif
                    @endfor
            
                    {{-- Next Page Link --}}
                    @if ($events->hasMorePages())
                        <li><a href="{{ $events->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="disabled"><span>Next</span></li>
                    @endif
                </ul>
            </div>
       
@extends('layout.index')
@section('title', 'GolfNewsTV - Rules It Right')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading vod">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>VOD</h4>
                            <h2>Rules It Right</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-4">
            <div class="row">
                @foreach ($videoLists->items as $key => $item)
                    @if ($item->snippet->title === 'Deleted video')
                        <?php unset($videoLists->items[$key]); ?>
                    @else
                        <div class="col-4">
                            <a href="{{ route('vod.rules_it_right.watch', $item->snippet->resourceId->videoId) }}">
                                <div class="card mb-4">
                                    @if (isset($item->snippet->thumbnails->medium->url))
                                        <img src="{{ $item->snippet->thumbnails->medium->url }}" class="img-fluid"
                                            alt="">
                                    @else
                                        <img src="{{ asset('assets/images/image-default.png') }}" class="img-fluid"
                                            alt="">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-titled">
                                            {{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') }}
                                        </h5>
                                    </div>
                                    {{-- <div class="card-footer text-muted">
                                        Published at {{ date('d M Y', strtotime($item->snippet->publishedAt)) }}
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="container mt-4" style="text-align: center; padding-bottom: 10px;">
            @if (isset($videoLists->prevPageToken))
                <a href="{{ route('vod.rules_it_right.token_prev', $videoLists->prevPageToken) }}"><i class="fa fa-chevron-left pagination"
                        aria-hidden="true" style=""></i></a>
            @else
                <i class="fa fa-chevron-left pagination" aria-hidden="true" style=""></i>
            @endif
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            @if (isset($videoLists->nextPageToken))
                <a href="{{ route('vod.rules_it_right.token_next', $videoLists->nextPageToken) }}"><i class="fa fa-chevron-right pagination"
                        aria-hidden="true"></i></a>
            @else
                <i class="fa fa-chevron-right pagination" aria-hidden="true"></i>
            @endif
        </div>
    </div>
@endsection

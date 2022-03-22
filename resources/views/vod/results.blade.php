@extends('layout.index')
@section('title', 'GolfNewsTV - VOD')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading vod">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>VOD</h4>
                            <h2>Video theo yêu cầu</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-4">
            <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('vod.results') }}" style="justify-content: end;">
                <input class="form-control mr-sm-2" type="search" name="search_query" placeholder="Search..."
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    @foreach ($videoLists->items as $key => $item)
                        @if ($item->snippet->title === 'Deleted video')
                            <?php unset($videoLists->items[$key]); ?>
                        @else
                            <div class="row mb-3">
                                <a href="{{ route('vod.bantin_360.watch', $item->id->videoId) }}"
                                    style="display: contents">
                                    <div class="col-4">
                                        <img src="{{ $item->snippet->thumbnails->medium->url }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-titled">
                                            {{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 150, $end = ' ...') }}
                                        </h5>
                                        <p class="text-muted">Published
                                            at {{ date('d M Y', strtotime($item->snippet->publishedAt)) }}</p>
                                        <p>{{ \Illuminate\Support\Str::limit($item->snippet->description, $limit = 400, $end = ' ...') }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

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
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4" style="width: 100%">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/{{ $singleVideo->items[0]->id }}" width="560"
                            height="600" frameborder="0" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5>{{ $singleVideo->items[0]->snippet->title }}</h5>
                        <p class="text-secondary">Published
                            at {{ date('d M Y', strtotime($singleVideo->items[0]->snippet->publishedAt)) }}</p>
                        <p>{{ $singleVideo->items[0]->snippet->description }}</p>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    @foreach ($done as $key => $item)
                        @if ($item->snippet->title === 'Deleted video')
                            <?php unset($done[$key]); ?>
                        @else
                            <div class="col-4">
                                <a href="{{ route('vod.rules_it_right.watch', $item->snippet->resourceId->videoId) }}">
                                    <div class="card mb-4">
                                        @if (isset($item->snippet->thumbnails->medium->url))
                                            <img src="{{ $item->snippet->thumbnails->medium->url }}"
                                                class="img-fluid" alt="">
                                        @else
                                            <img src="{{ asset('assets/images/image-default.png') }}"
                                                class="img-fluid" alt="">
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-titled">
                                                {{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') }}
                                            </h5>
                                        </div>
                                        {{-- <div class="card-footer text-muted">
                                            {{ date('d M Y', strtotime($item->snippet->publishedAt)) }}
                                        </div> --}}
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="container mt-4" style="text-align: center;" type="button">
                <button onclick="location.href='{{ route('vod.rules_it_right') }}'" class=" btn1">Xem thêm</button>
            </div>
        </div>
    </div>
@endsection

@push('style_loadmore')
    <style>
        .btn1 {
            width: 200px;
            height: 50px;
            border: 1px solid #f36f25;
            color: #f36f25;
            background-color: white;
            border-radius: 10px;
            box-shadow: inset 0 0 0 0 #f36f25;
            transition: ease-out 0.3s;
            outline: none;
            text-align: center;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .btn1:hover {
            box-shadow: inset 200px 0 0 0 #f36f25;
            color: #fff
        }

    </style>
@endpush

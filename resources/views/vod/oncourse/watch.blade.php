@extends('layout.index')
@section('title', 'GolfNewsTV - Oncourse')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading vod">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>VOD</h4>
                            <h2>Oncourse</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container mt-4">
        <div class="row">
            @foreach ($dones as $done)
                <div class="col-12">
                    <div class="card mb-4" style="width: 100%">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video width="560" height="600" controls>
                                <source src="{{ $done['link_video'] }}" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                        </div>
                        <div class="card-body">
                            <h5>{{ $done['name_video'] }}</h5>
                            <p class="text-secondary">Published at
                                {{ date('d M Y', strtotime($done['time'])) }}</p>
                            {{-- <p>{{ $singleVideo->items[0]->snippet->description }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            @foreach ($arr as $key => $item)
                <div class="col-4">
                    <a href="{{ route('vod.oncourse.watch', $item['etag']) }}">
                        <div class="card mb-4">
                            <img src="{{ $item['link_thumb'] }}" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-titled">
                                    {{ \Illuminate\Support\Str::limit($item['name_thumb'], $limit = 50, $end = ' ...') }}
                                </h5>
                            </div>
                            {{-- <div class="card-footer text-muted">
                                    {{ date('d M Y', strtotime($item->snippet->publishedAt)) }}
                                </div> --}}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-4" style="text-align: center;" type="button">
        <button onclick="location.href='{{ route('vod.oncourse') }}'" class=" btn1">Xem thêm</button>
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

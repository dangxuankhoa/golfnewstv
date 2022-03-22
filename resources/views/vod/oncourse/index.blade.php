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
        <div class="container mt-4">
            <div class="row">
                @foreach ($data as $key => $item)
                    <div class="col-4">
                        <a href="{{ route('vod.oncourse.watch', $item['etag']) }}">
                            <div class="card mb-4">
                                <img src="{{ $item['link_thumb'] }}" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-titled">
                                        {{ \Illuminate\Support\Str::limit($item['name_video'], $limit = 50, $end = ' ...') }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mt-4" style="display: flex;justify-content: center; padding-bottom: 10px; font-size: 16px">
        {{ $data->links() }}
    </div>
@endsection

@push('style_pagination')
<style>
    .pagination>li>a,
    .pagination>li>span {
        color: #f36f25; // use your own color here
    }
    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        background-color: #f36f25;
        border-color: #f36f25;
    }
    .pagination{
        font-size: 18px
    }
    .page-item.active .page-link{
        background-color: #f36f25!important;
        border-color: #f36f25!important;
        color: #fff
    }

</style>
@endpush

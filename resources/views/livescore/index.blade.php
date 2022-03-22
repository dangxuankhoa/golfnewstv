@extends('layout.index')
@section('title', 'GolfNewsTV - Live Score')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading livescore">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Live Score</h4>
                            <h2>Theo dõi điểm trực tuyến</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="wrap-page container mt-4">
        <div style="margin-left: auto; margin-right: auto;">
            <iframe frameborder="0" width="100%" height="1300px" id="idIframe" scrolling="yes"
                src="https://scorelive.vhandicap.com/livescore75Date203.html" width="100%"></iframe>
        </div>
    </div>
@endsection

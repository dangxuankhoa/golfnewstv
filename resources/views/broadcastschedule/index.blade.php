@extends('layout.index')
@section('title', 'GolfNewsTV - Lịch phát sóng')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading broadcast">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>BroadCast Schedule</h4>
                            <h2>Lịch phát sóng</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container mt-4" style="text-align: center">
        <img src="{{asset('assets\images\com.png')}}" alt="" style="width: 40%">
    </div>
    <br>
@endsection

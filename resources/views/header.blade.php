<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/GolfNews.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ set_active('layout') }}">
                        <a class="nav-link" href="/">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item {{ set_active('broadcastschedule') }}">
                        <a class="nav-link" href="{{ route('broadcastschedule') }}">Lịch phát sóng</a>
                    </li>
                    <li class="nav-item {{ set_active('news') }}">
                        <a class="nav-link" href="{{ route('news') }}">Tin tức</a>
                    </li>
                    <li
                        class="nav-item {{ set_active(['vod', 'vod.bantin_360', 'vod.chuyen_golf', 'vod.gnnv', 'vod.rules_it_right', 'vod.oncourse', 'vod.highlight']) }}">
                        <a class="nav-link" href="{{ route('vod') }}" style="pointer-events: none">VOD <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('vod.bantin_360') }}">Bản tin 360</a></li>
                            <li><a href="{{ route('vod.chuyen_golf') }}">Chuyện golf</a></li>
                            <li><a href="{{ route('vod.gnnv') }}">Góc nhìn & Nhân vật</a></li>
                            <li><a href="{{ route('vod.rules_it_right') }}">Rules It Right</a></li>
                            <li><a href="{{ route('vod.oncourse') }}">Oncourse</a></li>
                            <li><a href="{{ route('vod.highlight') }}">Highlight giải đấu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item {{ set_active('livescore') }}">
                        <a class="nav-link" href="{{ route('livescore') }}">Live Score</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

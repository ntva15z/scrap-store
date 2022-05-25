<nav class="navbar navbar-expand-lg" style="padding: 0; z-index: 5">
    <div class="container-fluid header" id="myHeader">
        <a class="navbar-brand" href="{{route(HOME_PAGE)}}">
            <i class="fas fa-film mr-2"></i>
            Phế liệu Tuấn
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="{{route(HOME_PAGE)}}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="{{route(HOME_ABOUT_PAGE)}}">Giới thiệu</a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                    <a class="dropbtn nav-link">Thu mua phế liệu</a>
                    <div class="dropdown-content">
                        @if(!is_null($productShare))
                            @foreach($productShare as $item)
                                <a class="nav-link nav-link-3" href="{{route(HOME_DETAIL_PAGE, $item->slug)}}">{{$item->name}}</a>
                            @endforeach
                        @endif
                    </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="#">Thanh lý phế liệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@extends('client.layouts.main')
@section('custom-style')
@endsection
@section('carousel')
    @include('client.layouts.carousel')
@endsection
@section('content')
<!-- Start Banner -->
<div class="container-fluid tm-container-content tm-mt-60">
    <div class="mb-4 d-flex justify-content-center">
        <h2 class="cols tm-text-primary">
            Chuyên thu thu phế liệu giá cao nhất: www.phelieu.net
        </h2>
    </div>
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            DỊCH VỤ TIÊU BIỂU
        </h2>
    </div>
    <div class="row tm-mb-90 tm-gallery">
        @foreach ($data as $item)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item" style="border-radius: 12px; height: 300px;">
                    <img style="width: 100%; height: 100%; object-fit: cover" src="{{ \App\Library\HelperS3::getPathS3(PATH_PRODUCT_IMAGE . $item->id . "/middle." .$item->extension) }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Chi tiết</h2>
                        <a href="{{route(HOME_DETAIL_PAGE, $item->slug)}}"></a>
                    </figcaption>
                </figure>
                <div class="text-center">
                    <h5 class="">{{$item->name}}</h5>
                </div>
            </div>
        @endforeach
    </div> <!-- row -->
    <input hidden id="page" value="1">
    <div class="row" style="margin-left: 0; margin-right: 0;">
        {{ $data->appends($_GET)->links('helpers.pagination') }}
    </div>
    <div class="row tm-mb-90">
        <div class="mb-4 d-flex justify-content-center">
            <h2 class="cols tm-text-primary">
                CẢM NHẬN CỦA KHÁCH HÀNG
            </h2>
        </div>
        <section class="pt-5">
            <div class="container">
                <!-- News & Events List -->
                <div class="row g-3 mt-0">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="h-100 w-100 bg-white rounded">
                            <div>
                                <img src="{{ asset('assets/images/user5-128x128.jpg') }}" class="w-100" alt="" />
                            </div>

                            <a href="#" class="nav-link fs-6 mt-1 p-0">
                                Thái độ làm việc chuyên nghiệp, khảo sát nhanh báo giá tốt,vì vậy Phế Liệu THÀNH ĐẠT luôn là đối tác của chúng tôi.
                            </a>
                            <p class="text-secondary text-uppercase m-0" style="font-size: 0.75rem">
                                MR: 1 / <a href="#">Facebook</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="h-100 w-100 bg-white rounded">
                            <div>
                                <img src="{{ asset('assets/images/user5-128x128.jpg') }}" class="w-100" alt="" />
                            </div>

                            <a href="#" class="nav-link fs-6 mt-1 p-0">
                                Cảm ơn Phế Liệu Thành Đạt chúng tôi đánh giá cao cách làm việc chuyên nghiệp của bạn, hi vọng được hợp tác lâu dài cùng bạn !
                            </a>
                            <p class="text-secondary text-uppercase m-0" style="font-size: 0.75rem">
                                MR: 2 / <a href="#">Facebook</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="h-100 w-100 bg-white rounded">
                            <div>
                                <img src="{{ asset('assets/images/user5-128x128.jpg') }}" class="w-100" alt="" />
                            </div>

                            <a href="#" class="nav-link fs-6 mt-1 p-0">
                                Giám đốc công ty AN HƯNG PHÚ – Chúng tôi thường xuyên làm việc với phế liệu ngọc thư quả thật đều tuyệt vời từ thái độ giá cả !
                            </a>
                            <p class="text-secondary text-uppercase m-0" style="font-size: 0.75rem">
                                MR: 3 / <a href="#">Facebook</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="h-100 w-100 bg-white rounded">
                            <div>
                                <img src="{{ asset('assets/images/user5-128x128.jpg') }}" class="w-100" alt="" />
                            </div>

                            <a href="#" class="nav-link fs-6 mt-1 p-0">
                                Cảm ơn vì đã hợp tác với chúng tôi trong thời gian qua. chúc công ty luôn phát triển vững mạnh trong thời gian tới. Thanks
                            </a>
                            <p class="text-secondary text-uppercase m-0" style="font-size: 0.75rem">
                                MR: 4 / <a href="#">Facebook</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div> <!-- container-fluid, tm-container-content -->
<!-- End Q&A section -->
@endsection
@section('jsfiles')
@stop

@extends('client.layouts.main')

@section('content')
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">{{$product->name}}</h2>
        </div>
        <div class="row tm-mb-90">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-video-details" style="border-right: 1px solid #7777775e">
                    <h1 class="entry-title uppercase">{{$product->name}}</h1>
                    <div class="mb-4">
                        <p style="color: black">{{$product->name . " GIÁ CAO 012345678 – 012345678 ( Mr: Tuan ) Tự hào là đơn vị thu mua chuyên nghiệp nhất, uy tín nhất và lâu năm trong ngành, công ty T thu mua phế liệu chì cao nhất toàn quốc với cam kết dịch vụ thanh toán nhanh, gọn, […]"}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <h4 style="color:dodgerblue">{{$product->name . ' GIÁ CAO 012345678 – 012345678 ( Mr: Tuan )'}}</h4>
                <div>
                    {!! $product->description !!}
                </div>
                <div style="text-align: justify;">
                    <p>Liên hệ ngay với chúng tôi !</p>
                    <h3 style="color: #0000ff"><strong>CÔNG TY TNHH TMDV PHẾ LIỆU T</strong></h3>
                    <p style="color: #0000ff">Địa chỉ: abc abc abc</p>
                    <p style="color: #0000ff">Email: phelieuphatdat@gmail.com</p>
                    <h3 style="color:red">Số điện thoại: 012345678 – 012345678 ( Mr: Tuan )</h3>
                    <p><strong><img class="text-center" style="width: 100%" src="{{asset("images/lien-he-ngay.png")}}"
                                    alt="">&nbsp;&nbsp;</strong></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="image-slider">
                @if(!is_null($productShare))
                    @foreach($productShare as $data)
                        <div class="image-item">
                            <div class="image">
                                <img
                                    src="{{ \App\Library\HelperS3::getPathS3(PATH_PRODUCT_IMAGE . $data->id . "/middle." .$data->extension) }}"
                                    alt="">
                            </div>
                            <h3 class="image-title">{{$data->name}}</h3>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->
@endsection
@section('jsfiles')
    <script>
        $(document).ready(function () {
            $(".image-slider").slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                draggable: false,
                arrows: true,
                prevArrow: "<button type='button' class='slick-prev pull-left slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow: "<button type='button' class='slick-next pull-right slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
@stop

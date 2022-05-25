@extends('client.layouts.main')

@section('content')
<!-- Start Carousel -->
<section class="mb-5">
  <div class="container pt-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators mb-0">
        <a href="javascript:void(0)" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
          aria-current="true" aria-label="Slide 1"></a>
        <a href="javascript:void(0)" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></a>
        <a href="javascript:void(0)" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3" class="active"></a>
        <a href="javascript:void(0)" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></a>
        <a href="javascript:void(0)" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 3"></a>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item p-4 carousel_item" style="
            background: linear-gradient(
                to bottom,
                transparent,
                rgba(0, 0, 0, 0.2)
              ),
              url('assets/client/images/carousel_1.png');
            background-size: cover;
          ">
          <div class="h-100 d-flex flex-column justify-content-end">
            <h6 class="text-dark fw-bold fs-5">TỰ LÀM MÓN</h6>
            <h6 class="text-white fw-bold fs-1" style="text-shadow: 0px 0px 16px #ffd200">
              CHUẨN 5 SAO
            </h6>
            <h6 class="text-dark fw-bold fs-5">NHƯ NHÀ HÀNG</h6>
          </div>
        </div>
        <div class="carousel-item p-4 carousel_item" style="
            background: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.5)),
              url('assets/client/images/carousel_2.png');
            background-size: cover;
          ">
          <div class="h-100 d-flex flex-column justify-content-end">
            <h6 class="text-white fw-bold fs-5">TỰ LÀM MÓN</h6>
            <h6 class="text-white fw-bold fs-1" style="text-shadow: 0px 0px 16px #ffd200">
              CHUẨN 5 SAO
            </h6>
            <h6 class="text-white fw-bold fs-5">NHƯ NHÀ HÀNG</h6>
          </div>
        </div>
        <div class="carousel-item p-4 carousel_item active" style="
            background: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.5)),
              url('assets/client/images/carousel_3.png');
            background-size: cover;
          ">
          <div class="h-100 d-flex flex-column justify-content-end">
            <h6 class="text-white fw-bold fs-5">TỰ LÀM MÓN</h6>
            <h6 class="text-white fw-bold fs-1" style="text-shadow: 0px 0px 16px #ffd200">
              CHUẨN 5 SAO
            </h6>
            <h6 class="text-white fw-bold fs-5">NHƯ NHÀ HÀNG</h6>
          </div>
        </div>

        <div class="carousel-item p-4 carousel_item" style="
            background: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.5)),
              url('assets/client/images/carousel_2.png');
            background-size: cover;
          ">
          <div class="h-100 d-flex flex-column justify-content-end">
            <h6 class="text-white fw-bold fs-5">TỰ LÀM MÓN</h6>
            <h6 class="text-white fw-bold fs-1" style="text-shadow: 0px 0px 16px #ffd200">
              CHUẨN 5 SAO
            </h6>
            <h6 class="text-white fw-bold fs-5">NHƯ NHÀ HÀNG</h6>
          </div>
        </div>
        <div class="carousel-item p-4 carousel_item" style="
            background: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.5)),
              url('assets/client/images/carousel_1.png');
            background-size: cover;
          ">
          <div class="h-100 d-flex flex-column justify-content-end">
            <h6 class="text-white fw-bold fs-5">TỰ LÀM MÓN</h6>
            <h6 class="text-white fw-bold fs-1" style="text-shadow: 0px 0px 16px #ffd200">
              CHUẨN 5 SAO
            </h6>
            <h6 class="text-white fw-bold fs-5">NHƯ NHÀ HÀNG</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Carousel -->

<!-- Start Select Categories  -->
<section>
  <div class="container pt-4">
    <div class="row g-2">
      @if(!is_null($categoriesShare))
      @foreach($categoriesShare as $category)
      <div class="col-lg-1over5 col-6">
        <a href="{{route('home.list', $category->slug)}}" class="
            d-flex
            align-items-center
            p-2
            border border-light
            rounded-3
            shadow-sm
            nav-link
          ">
          <div class="me-3"><img src="{{ asset('assets/client/icons') }}/salad.svg" style="width: 1.5rem;" alt="" /></div>
          <span class="fw-bold" style="color: #646d84; white-space: nowrap; overflow:hidden">{{$category->title}}</span>
        </a>
      </div>
      @endforeach
      @endif
      {{--<div class="col-lg-1over5 col-6">
        <a href="javascript:void(0)" class="
            d-flex
            align-items-center
            p-2
            border border-light
            rounded-3
            shadow-sm
            nav-link
          ">
          <div class="me-3"><img src="{{ asset('assets/client/icons') }}/boiled.svg" style="width: 1.5rem;" alt="" /></div>
          <span class="fw-bold" style="color: #646d84; white-space: nowrap;">Food Deli Now</span>
        </a>
      </div>
      <div class="col-lg-1over5 col-6">
        <a href="javascript:void(0)" class="
            d-flex
            align-items-center
            p-2
            border border-light
            rounded-3
            shadow-sm
            nav-link
          ">
          <div class="me-3"><img src="{{ asset('assets/client/icons') }}/fast-food.svg" style="width: 1.5rem;" alt="" /></div>
          <span class="fw-bold" style="color: #646d84; white-space: nowrap;">Food Deli Combo</span>
        </a>
      </div>
      <div class="col-lg-1over5 col-6">
        <a href="javascript:void(0)" class="
            d-flex
            align-items-center
            p-2
            border border-light
            rounded-3
            shadow-sm
            nav-link
          ">
          <div class="me-3"><img src="{{ asset('assets/client/icons') }}/cooking.svg" style="width: 1.5rem;" alt="" /></div>
          <span class="fw-bold" style="color: #646d84; white-space: nowrap;">Food Deli Set</span>
        </a>
      </div>
      <div class="col-lg-1over5 col-6">
        <a href="javascript:void(0)" class="
            d-flex
            align-items-center
            p-2
            border border-light
            rounded-3
            shadow-sm
            nav-link
          ">
          <div class="me-3"><img src="{{ asset('assets/client/icons') }}/grain-sack.svg" style="width: 1.5rem;" alt="" /></div>
          <span class="fw-bold" style="color: #646d84; white-space: nowrap;">Food Deli Store</span>
        </a>
      </div>--}}
    </div>

    <div class="row g-2 flex-wrap pt-3 align-items-center justify-content-start">
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="
            nav-link
            text-white
            bg-success
            rounded-pill
            px-2
            text-center
            pro_category pro_category_active
          ">
          <img src="{{ asset('assets/client/icons') }}/heart_white.svg" class="" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">Tất cả</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
      <div class="col col-lg-1over10 col-3">
        <a href="javascript:void(0)" class="nav-link rounded-pill px-2 text-center pro_category">
          <img src="{{ asset('assets/client/icons') }}/heart.svg" width="25px" alt="" />
          <span class="fw-bold" style="font-size: 0.8rem">&nbsp;Thịt</span>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End Select Categories  -->

<!-- Start Polular Products -->
<div class="list-info">
  @if(!is_null($categoriesParent))
  @foreach($categoriesParent as $index => $category)
  @if(count($category->categoryProducts) > 0)
  <section class="mt-4">
    <div class="container pt-4">
      <div class="d-flex justify-content-between align-items-center">
        <h4 class="fw-bold mb-0">{{$category->title}}</h4>
        <a href="javascript:void(0)" onclick="getProductByCategory({{$category->id}},1);" class="nav-link pe-0">Xem tất cả &nbsp;<img src="{{ asset('assets/client/icons') }}/arrow-right-success.svg" alt="" /></a>
      </div>
      <!-- List Products -->
      <div class="products">
        @php($i = 0)
        @foreach($category->categoryProducts as $cateProduct )
        @if($i >= 12)
          @break
        @elseif($cateProduct->product->status == 0 || is_null($cateProduct->product->publish_at))
          @continue
        @else
        @php($i += 1)
        <div class="product">
          <span class="product-sale bg-success">Sale</span>
          <div class="product-item">
            <img class="product-item-image" src="{{\App\Library\HelperS3::getPathS3($cateProduct->product->path.'middle.'.$cateProduct->product->extension) }}" alt="">
            <a href="#" class="product-item-add shadow">
              <img src="{{asset('assets/client/icons')}}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <div class="product-content">
            <div class="product-price">
            @if($cateProduct->product->discount != 0) {{round($cateProduct->product->price * (100 - $cateProduct->product->discount) / 100) . 'đ'}} @else {{$cateProduct->product->price . 'đ'}} @endif&nbsp;&nbsp;@if($cateProduct->product->discount != 0)<span class="product-price-sale">{{$cateProduct->product->price . 'đ'}}</span>@endif
            </div>
            <div class="product-top">
              <a href="./pages/product_details.html" class="nav-link">
                {!!$cateProduct->product->content!!}
              </a>
            </div>
            <div class="product-bottom text-success">{{$category->title}}</div>

          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </section>
  <!-- Start Experiance -->
  <div class="container pt-5">
    <div class="row g-3">
      <div class="col-lg-4 col-sm-12">
        <div class="px-3 pt-md-5 py-4" style="
            background: linear-gradient(
                to left,
                transparent,
                rgba(5, 168, 94, 0.67)
              ),
              url('assets/client/images/experiance_1.png') no-repeat;
            background-size: cover;
            border-radius: 1rem;
          ">
          <p class="text-white fs-6 fw-bold">
            Amet minim mollit non deserunt ullamo est sit aliqua dolor
          </p>
          <a href="#" class="btn btn-sm btn-success rounded-pill py-2 px-3">
            Khám phá ngay
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="px-3 pt-md-5 pb-4" style="
            background: linear-gradient(
                to left,
                transparent,
                rgba(5, 168, 94, 0.67)
              ),
              url('assets/client/images/experiance_2.png') no-repeat;
            background-size: cover;
            border-radius: 1rem;
          ">
          <p class="text-white fs-6 fw-bold">
            Amet minim mollit non deserunt ullamo est sit aliqua dolor
          </p>
          <a href="#" class="btn btn-sm btn-success rounded-pill py-2 px-3">
            Khám phá ngay
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="px-3 pt-md-5 pb-4" style="
            background: linear-gradient(
                to left,
                transparent,
                rgba(5, 168, 94, 0.67)
              ),
              url('assets/client/images/experiance_3.png') no-repeat;
            background-size: cover;
            border-radius: 1rem;
          ">
          <p class="text-white fs-6 fw-bold">
            Amet minim mollit non deserunt ullamo est sit aliqua dolor
          </p>
          <a href="#" class="btn btn-sm btn-success rounded-pill py-2 px-3">
            Khám phá ngay
          </a>
        </div>
      </div>
    </div>
  </div>
  @endif
  @endforeach
  @endif
</div>
<input hidden id="page" value="1">
<!-- End Experiance command start-->
{{--
<!-- End Polular Products -->

<!-- Start Food Deli Pack -->
<section class="mt-4">
  <div class="container pt-4">
    <div class="d-flex justify-content-between align-items-center">
      <h4 class="fw-bold mb-0">Food Deli Pack</h4>

      <a href="#" class="nav-link pe-0">Xem tất cả &nbsp;<img src="{{ asset('assets/client/icons') }}/arrow-right-success.svg"
          alt="" /></a>
    </div>

    <!-- List Products -->
    <div class="row g-3 pt-4 ">
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Food Deli Pack -->

<!-- Start Food Deli Combo -->
<section class="mt-4">
  <div class="container pt-4">
    <div class="d-flex justify-content-between align-items-center">
      <h4 class="fw-bold mb-0">Food Deli Combo</h4>

      <a href="#" class="nav-link pe-0">Xem tất cả &nbsp;<img src="{{ asset('assets/client/icons') }}/arrow-right-success.svg"
          alt="" /></a>
    </div>

    <!-- List Products -->
    <div class="row g-3 pt-4 ">
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Experiance -->
<div class="container pt-5">
  <div class="row g-3">
    <div class="col-lg-4 col-sm-12">
      <div class="px-3 pt-md-5 py-4" style="
          background: linear-gradient(
              to left,
              transparent,
              rgba(5, 168, 94, 0.67)
            ),
            url('assets/client/images/experiance_1.png') no-repeat;
          background-size: cover;
          border-radius: 1rem;
        ">
        <p class="text-white fs-6 fw-bold">
          Amet minim mollit non deserunt ullamo est sit aliqua dolor
        </p>
        <a href="#" class="btn btn-sm btn-success rounded-pill py-2 px-3">
          Khám phá ngay
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12">
      <div class="px-3 pt-md-5 pb-4" style="
          background: linear-gradient(
              to left,
              transparent,
              rgba(5, 168, 94, 0.67)
            ),
            url('assets/client/images/experiance_2.png') no-repeat;
          background-size: cover;
          border-radius: 1rem;
        ">
        <p class="text-white fs-6 fw-bold">
          Amet minim mollit non deserunt ullamo est sit aliqua dolor
        </p>
        <a href="#" class="btn btn-sm btn-success rounded-pill py-2 px-3">
          Khám phá ngay
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12">
      <div class="px-3 pt-md-5 pb-4" style="
          background: linear-gradient(
              to left,
              transparent,
              rgba(5, 168, 94, 0.67)
            ),
            url('assets/client/images/experiance_3.png') no-repeat;
          background-size: cover;
          border-radius: 1rem;
        ">
        <p class="text-white fs-6 fw-bold">
          Amet minim mollit non deserunt ullamo est sit aliqua dolor
        </p>
        <a href="#" class="btn btn-sm btn-success rounded-pill py-2 px-3">
          Khám phá ngay
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Experiance -->
<!-- End Food Deli Combo -->

<!-- Start Food Deli Now -->
<section class="mt-4">
  <div class="container pt-4">
    <div class="d-flex justify-content-between align-items-center">
      <h4 class="fw-bold mb-0">Food Deli Now</h4>

      <a href="#" class="nav-link pe-0">Xem tất cả &nbsp;<img src="{{ asset('assets/client/icons') }}/arrow-right-success.svg"
          alt="" /></a>
    </div>

    <!-- List Products -->
    <div class="row g-3 pt-4 ">
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Food Deli Now -->

<!-- Start Food Deli Now -->
<section class="mt-4">
  <div class="container pt-4">
    <div class="d-flex justify-content-between align-items-center">
      <h4 class="fw-bold mb-0">Food Deli Now</h4>

      <a href="#" class="nav-link pe-0">Xem tất cả &nbsp;<img src="{{ asset('assets/client/icons') }}/arrow-right-success.svg"
          alt="" /></a>
    </div>

    <!-- List Products -->
    <div class="row g-3 pt-4 ">
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Food Deli Now -->

<!-- Start Food Deli Now -->
<section class="mt-4">
  <div class="container pt-4">
    <div class="d-flex justify-content-between align-items-center">
      <h4 class="fw-bold mb-0">Food Deli Now</h4>

      <a href="#" class="nav-link pe-0">Xem tất cả &nbsp;<img src="{{ asset('assets/client/icons') }}/arrow-right-success.svg"
          alt="" /></a>
    </div>

    <!-- List Products -->
    <div class="row g-3 pt-4 ">
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-6">
        <div class="h-100 w-100 shadow p-3 bg-white rounded product" style="overflow-wrap: break-word;">
          <!-- sale -->
          <p class="
              py-1
              px-2
              fw-bold
              bg-success
              d-inline-block
              rounded-pill
              text-white
            " style="font-size: 11px">
            SALE
          </p>
          <!-- product image -->
          <div class="text-center position-relative">
            <img src="{{ asset('assets/client/images') }}/ca_kho_to.png" alt="" />

            <!-- icon add to cart -->
            <a href="#" class="
                bg-white
                rounded-circle
                shadow
                d-inline-block
                p-1
                position-absolute
              " style="cursor: pointer; right: 0; bottom: 0">
              <img src="{{ asset('assets/client/icons') }}/fe_add-cart.svg" alt="" />
            </a>
          </div>
          <!-- infomation -->
          <!-- now: text-danger | combo: success | pack: success | set: success || store: warning  -->
          <div>
            <p class="fw-bold mb-2">
              350.000đ&nbsp;&nbsp;<span class="text-decoration-line-through text-black-50"
                style="font-size: 13px; white-space: nowrap;">375.000đ</span>
            </p>
            <a href="{{ route('productDetail') }}" class="nav-link p-0">
              Combo đồ ăn sơ chế sẵn 7 ngày trong tuần
            </a>
            <p class="text-success mb-0 mt-2">Combo</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Food Deli Now -->
          --}}
<!-- Start Order Online -->
<section class="mt-5" style="background: linear-gradient(to left, rgba(255, 255, 255, 1), rgba(241, 241, 241, 1))">
  <div class="container d-flex justify-content-around align-items-center py-3 py-lg-0">
    <div>
      <h3 class="fs-1 fw-bold text-success">Đặt hàng online dễ dàng!</h3>
      <h5 class="fs-4 text-secondary">Tải ngay app Food Deli!</h5>

      <div class="d-flex align-items-center mt-3">
        <a href="#" class="btn btn-sm ps-0">
          <img src="{{ asset('assets/client/icons') }}/app_store.svg" alt="" />
        </a>
        <a href="#" class="btn btn-sm">
          <img src="{{ asset('assets/client/icons') }}/google_play.svg" alt="" />
        </a>
      </div>
    </div>
    <div class="h-100">
      <img src="{{ asset('assets/client/images') }}/order_online.png" class="w-100 h-100" alt="" />
    </div>
  </div>
</section>
<!-- End Order Online -->
@endsection
@section('jsfiles')
<script>
  var page = $('#page').val();
  var limit = 12;
	var categoryName = '';
  var categoryId = '';
  var iconArrowRight = '<?php echo asset('assets/client/icons').'/arrow-right-success.svg'; ?>';
  var iconCart = '<?php echo asset('assets/client/icons').'/fe_add-cart.svg'; ?>';
  function getProductByCategory(key, page){
		$.ajax({
					url: '/ajax/products/' + key + '/' + page,
					type: 'GET',
					async: true
				})
				.done(function(json) {
					var html = buildProductsHtml(json['data']);
					$('.list-info').empty();
          var divSection = $('<section class="mt-4"/>');
			    var divContainer =  $('<div class="container pt-4"/>');
			    var divCate = $('<div class="d-flex justify-content-between align-items-center"/>');
			    var divCateName = $('<h4 class="fw-bold mb-0">'+categoryName+'</h4>');
			    // var divCateLink = $('<a href="javascript:void(0)" onclick="getProductByCategory('+categoryId+',1);" class="nav-link pe-0">Xem tất cả &nbsp;<img src="'+iconArrowRight+'" alt="" /></a>');
          var cateInfo = divCate.append(divCateName);

          var divProducts = $('<div class="products"/>');
          var productItems = divProducts.append(html);

          var container = divContainer.append(cateInfo).append(productItems);
          var section = divSection.append(container);

          if (json['data'].length < limit) {
            $('.list-info').append(section);
          } else {
            var viewMore = '<div class="text-center mt-30 mb-30" style="width: 100%;"><input type="button" onclick="ajaxViewMore('+categoryId+','+page+');" class="view_more btn btn-danger rounded-pill btn-md" value="Hiển thị thêm"></div>'
            $('.list-info').append(section).append(viewMore);
          }

				})
				.fail(function(data) {
					Swal.fire(
						'Có vấn đề xảy ra',
						'Dữ liệu chưa được xoá',
						'warning'
					).finally(() => {
						window.location.reload();
					});
				});
	}
  function buildProductsHtml(data){
		var listCar = '';

		categoryName = data[0].category_name;
    categoryId = data[0].category_id;
		data.forEach(function (product) {
			var img = product.image;
      var slug = product.slug;
      var productInfo = '';

			productInfo +=      '<div class="product">';
			productInfo += 	      '<span class="product-sale bg-success">Sale</span>';
			productInfo += 	      '<div class="product-item">';
			productInfo += 		      '<img class="product-item-image" src="'+img+'" alt="">';
			productInfo += 		      '<a href="#" class="product-item-add shadow">';
			productInfo += 			    ' <img src="'+iconCart+'" alt="" />';
			productInfo += 		      '</a>';
			productInfo += 	      '</div>';
			productInfo += 	      '<div class="product-content">';
			productInfo += 		      '<div class="product-price">';
			if(product.price_discount != null){
				productInfo +=		product.price_discount+'&nbsp;&nbsp;<span class="product-price-sale">'+product.price+'đ</span>'+ '</div>';
			}else{
				productInfo += 		product.price + '</div>';
			}
			productInfo += 		      '<div class="product-top">';
			productInfo += 			      `<a href="/chi-tiet-san-pham/${slug}" class="nav-link">${product.content}</a>`;
			productInfo += 		      '</div>';
			productInfo += 		      '<div class="product-bottom text-success">'+product.category_name+'</div>';
			productInfo += 	    '</div>';
			productInfo +=     '</div>';
			listCar += productInfo;
		});
		return listCar;
	}
  function ajaxViewMore(key, page){
    page = parseInt(page) + 1;
    $.ajax({
					url: '/ajax/products/' + key + '/' + page,
					type: 'GET',
					async: true
				})
				.done(function(json) {
					var html = buildProductsHtml(json['data']);
					$('.products').append(html);

          if (json['data'].length < limit) {
              $('.view_more').parent().addClass('invisible');
          } else {
              $('#page').val(page);
          }
				})
				.fail(function(data) {

				});
  }
  $(document).ready(function(){
		// getProductByCategory(0);
	});
</script>
@stop

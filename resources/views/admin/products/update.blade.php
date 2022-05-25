@extends('admin.layouts.main') @section('breadcrumb', 'Products')
@section('main')
<form action="{{ route(PRODUCT_POST_EDIT) }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card card-default">
    <div class="card-header">
      <div class="row justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold">Cập nhật thông tin sản phẩm</h3>

        <div class="btn-group btn-group-sm">
          <a href="{{ route(PRODUCT_LIST)}}" class="btn btn-danger mr-3">
            <i class="fas fa-window-close"></i>&nbsp;&nbsp;Hủy
          </a>
          &nbsp;
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i>&nbsp;&nbsp;Sửa
          </button>
        </div>
      </div>
    </div>
    <div class="card-body">
      @if ($errors->has('msg'))
      <div class="error" style="font-size:18px">{{ $errors->first('msg') }}</div>
      @endif
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="form-group col">
              <label for="name">Tiêu đề<span class="text-danger">&nbsp;*</span></label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name', !is_null($product)?$product->name:'') }}">
              @error('name')
              <p style="color: red;">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <label for="slug">Slug<span class="text-danger">&nbsp;*</span></label>
              <div class="d-flex border rounded">
                <input type="text" class="form-control col-10 border-0" id="slug" name="slug" value="{{ old('slug', !is_null($product)?$product->slug:'') }}">
                <button type="button" class="col-2 btn btn-info btn-sm border-left" onclick="createSlug(this, 'name')">Tạo slug</button>
              </div>
              @error('slug')
              <p style="color: red;">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="description">Nội dung<span class="text-danger">&nbsp;*</span></label>
            <textarea name="description" id="description">
            {{old('description', !is_null($product)?$product->description:'')}}
            </textarea>
            @error('description')
            <p style="color: red;">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group">
          <label for="image">Ảnh đại diện</label>
            <div class="boxThumb">
              <div class="input-group col-3" style="padding:0">
                <input type="text" class="form-control input-file-dummy" placeholder="Choose image" aria-describedby="fileHelp" readonly>
                <label class="input-group-append mb-0">
                  <span class="btn btn-info input-file-btn">
                    <i class="fa fa-image"></i>&nbsp;&nbsp;File
                    <input type="file" hidden id="thumbUpload" name="image" accept="image/*" onchange="previewSingle(event)">
                    <input hidden id="fileUploadMainRemoved" name="fileUploadMainRemoved">
                  </span>
                </label>
              </div>
              @error('image')
              <p style="color: red;">{{$message}}</p>
              @enderror
            </div>
            <div id="galleryPhotos">
              @if(!is_null($product->extension))
              <div class="imagePhoto">
                <img src="{{ \App\Library\HelperS3::getPathS3(PATH_PRODUCT_IMAGE . $product->id .'/middle.'.$product->extension)  }}" /><a href="javascript:void(0)" class="removePhotoMain"><i class="fa fa-trash-alt"></i></a>
              </div>
              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <div class="text-right mb-2">
              <span class="font-weight-bold" style="font-size: 13px">
                &nbsp;
              </span>
            </div>
          </div>
          <div class="form-group">
          <div class="form-group">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h3 class="card-title">SEO</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body overflow-auto" style="max-height: 400px;">
                <div class="form-group">
                  <label for="meta_title">SEO Meta title</label>
                  <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{ old('meta_title', !is_null($product)?$product->seo_title:'') }}">
                  @error('seo_title')
                  <p style="color: red;">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="meta_title">SEO Meta keyword</label>
                  <input type="text" class="form-control" id="seo_meta_keyword" name="seo_meta_keyword" value="{{ old('seo_meta_keyword', !is_null($product)?$product->seo_meta_keyword:'') }}">
                  @error('seo_meta_keyword')
                  <p style="color: red;">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="meta_title">SEO Meta description</label>
                  <textarea class="form-control" rows="5" id="seo_meta_desc" name="seo_meta_desc" >{{ old('seo_meta_desc', !is_null($product)?$product->seo_meta_desc:'') }}</textarea>
                  @error('seo_meta_desc')
                  <p style="color: red;">{{$message}}</p>
                  @enderror
                </div>
                <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$product->id}}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
@section('jsfiles')
<script>
  var list = [];
  var listRemove = [];
  var listOldRemove = [];
  var isHaveMainImage = false;

  function previewSingle(event) {
    let urls = null;
    if (event.target.files && event.target.files.length > 0) {
      $('#galleryPhotos').empty();
      urls = URL.createObjectURL(event.target.files[0]);
      isHaveMainImage = true;
      $('#galleryPhotos').html(`
            <div class="imagePhoto">
                <img src="${urls}" /><a href="javascript:void(0)" class="removePhotoMain"><i class="fa fa-trash-alt"></i></a>
            </div>`)
      $(".removePhotoMain").click(function() {
        $(this).parent().fadeOut(300);
        isHaveMainImage = true;
        $('#fileUploadMainRemoved').val(isHaveMainImage);
      });
    } else {
      isHaveMainImage = false;
    }
    $('#fileUploadMainRemoved').val(isHaveMainImage);
  }

  $(document).ready(function() {
    $(".removePhotoMain").click(function() {
      $(this).parent().fadeOut(300);
      isHaveMainImage = false;
      $('#fileUploadMainRemoved').val(isHaveMainImage);
    });
  })
</script>
@stop

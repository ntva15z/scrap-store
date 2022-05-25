@extends('admin.layouts.main')
@section('breadcrumb', 'Products')
@section('main')
<div class="col-12">
	<div class="card card-info">
		<div class="card-header">
			<h3 class="card-title">Danh sách sản phẩm</h3>
			<div class="card-tools">
				<div>
					<button type="button" onclick="deleteAllSelected();" class="d-inline-block btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Xóa
					</button>
					<a href="{{route(PRODUCT_CREATE)}}" class="d-inline-block btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tạo mới</a>
				</div>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form id="form-search-product" action="{{route(PRODUCT_LIST)}}" method="GET">
				<div class="row">
					<div class="col-2">
						<div class="form-group">
							<input type="text" style="width:100% !important;border: 1px solid #ced4da;" class="form-control-sm" id="search_text" name="search_text" value="{{ (isset($filter['search_text']) AND !is_null($filter['search_text'])) ? $filter['search_text'] : ''}}" placeholder="Tìm kiếm theo tiêu đề">
						</div>
					</div>
{{--					<div class="col-2">--}}
{{--						<div class="form-group">--}}
{{--							<select class="form-control-sm" id="shop" name="deleteAt">--}}
{{--								<option value="1" selected>Đã xoá</option>--}}
{{--								<option value="0">Chưa xoá</option>--}}
{{--							</select>--}}
{{--						</div>--}}
{{--					</div>--}}

					<div class="col">
						<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-search"></i>&nbsp;Tìm kiếm</button>
					</div>
				</div>
			</form>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th style="width:3%">
							<input type="checkbox" class="select-all checkbox" id="select-all" name="select-all" />
						</th>
						<th style="width:10%">Tiêu đề</th>
						<th style="width:auto">Slug</th>
						<th style="width:10%">Tiêu đề Seo</th>
						<th style="width:9%">Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $index => $item)
					<tr id="row-{{ $item->id }}">
						<td class="vertical-middle">
							<input type="checkbox" class="select-item checkbox" id="select-item-{{$item->id}}" name="select-item" />
						</td>
						<td class="vertical-middle text-break">{{ $item->name }}</td>
						<td class="vertical-middle text-break">{!! trans($item->slug) !!}</td>
						<td class="vertical-middle text-right price">{{ $item->seo_title }}</td>
						<td class="vertical-middle text-center">
							<a href="{{route(PRODUCT_EDIT, $item->slug)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
							<a class="btn btn-danger btn-remove btn-sm" data-id="{{ $item->id }}" href="{{ route(PRODUCT_DELETE, ['id' => $item->id]) }}" title="Xóa">
								<i class="far fa-trash-alt"></i>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row" style="margin-left: 0; margin-right: 0;">
			<div class="pl-0 col-lg-12 col-md-12 col-sm-12 pagination-box text-center" style="padding-right: 0;">
				<h6 class="pt-2">{!! sprintf(__('Hiển thị %s-%s của %s sản phẩm'), ($products->currentPage() - 1) * $products->perPage() + 1, (($products->currentPage() - 1) * $products->perPage()) + $products->count(), $products->total()) !!}
				</h6>
			</div>
			<div class="pl-0 col-lg-12 col-md-12 col-sm-12 pagination-box text-center" style="padding-right: 0;">
				<h5 class="pl-4" style="padding-left: 0 !important;">{{ $products->appends($_GET)->links('helpers.pagination') }}</h5>
			</div>
		</div>
	</div>
</div>
@endsection
@section('jsfiles')
<script>

	var lstIdDelete = [];

	function deleteAllSelected() {
		if (lstIdDelete.length > 0) {
			jQuery.ajax({
					url: '/admin/products/api/delete/listid',
					type: 'POST',
					data: {
						"_token": "{{ csrf_token() }}",
						'lstId': lstIdDelete
					},
					dataType: 'json',
					async: true
				})
				.done(function(json) {
					if (json['msg'] == 'success') {
						Swal.fire(
							'Xoá thành công!',
							'Dữ liệu đã được xoá hoàn toàn.',
							'success'
						).finally(() => {
							window.location.reload();
						});

					} else {
						Swal.fire(
							'Có vấn đề xảy ra',
							'Dữ liệu chưa được xoá',
							'warning'
						).finally(() => {
							window.location.reload();
						});
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
		} else {
			Swal.fire(
				'Dữ liệu đang trống',
				'Hãy chọn dữ liệu cần xóa',
				'warning'
			)
		}
	}

	$(document).ready(function() {
		$('#select-all').click(function() {
			lstIdDelete = [];
			if ($('#select-all').is(':checked')) {
				$(".select-item").each(function() {
					$(this).prop('checked', true);
					let inp = $(this).attr('id');
					lstIdDelete.push(inp.substring(12, inp.length));
				});
			} else {
				$(".select-item").each(function() {
					$(this).prop('checked', false);
				});
			}
		});
		$(".select-item").click(function() {
			if ($(".select-item").length == $(".select-item:checked").length) {
				$("#select-all").prop("checked", true);
				lstIdDelete = [];
				$(".select-item").each(function() {
					$(this).prop('checked', true);
					let inp = $(this).attr('id');
					lstIdDelete.push(inp.substring(12, inp.length));
				});
			} else {
				$("#select-all").prop("checked", false);
				lstIdDelete = [];
				$(".select-item").each(function() {
					if ($(this).is(':checked')) {
						let inp = $(this).attr('id');
						lstIdDelete.push(inp.substring(12, inp.length));
					}
				});
			}
		});
	});
</script>

@stop

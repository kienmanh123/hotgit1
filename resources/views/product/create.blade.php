@extends('layouts.layout')

@section('title', "Create product")

@section('css')

@endsection

@section('content')
@include("/childviews/header")
<div class="container">
	<form method="POST" action="{{ route('product-store') }}">
		@csrf
		<div class="mb-3">
		  <label for="name" class="form-label">Tên sản phẩm</label>
		  <input type="text" class="form-control" name="name" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="price" class="form-label">Giá</label>
		  <input type="number" class="form-control" name="price" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="main-image" class="form-label">Ảnh đại diện</label>
		  <input type="text" class="form-control" name="main-image" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="description" class="form-label">Mô tả</label>
		  <textarea type="text" class="form-control" name="description" placeholder=""></textarea>
		</div>
		<div class="mb-3">
		  <label for="rate" class="form-label">Đánh giá</label>
		  <input type="text" class="form-control" name="rate" placeholder="">
		</div>
		<div class="mb-3">
		  <input type="submit" class="form-control" placeholder="" value="Tạo">
		</div>
	</form>
</div>
@endsection


@section('footer')
@include("/childviews/footer")
@endsection

@section('script')

@endsection
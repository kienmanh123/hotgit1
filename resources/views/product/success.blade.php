@extends('layouts.layout')

@section('title', "Thông báo thành công")

@section('css')

@endsection

@section('content')
@include("/childviews/header")
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Tạo dữ liệu thành công!</h4>
  <p>Click vào <a href='{{route("product-show", ["id" => $id])}}'>update</a>để chỉnh sửa dữ liệu</p>
</div>
@endsection


@section('footer')
@include("/childviews/footer")
@endsection

@section('script')

@endsection
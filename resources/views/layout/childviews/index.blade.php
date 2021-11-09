@extends('layouts.layout')

@section('title', "Mylaravel")

@section('css')

@endsection

@section('content')
@include("/childviews/header")
@include("/childviews/banner")
@include("/childviews/content")
@endsection


@section('footer')
@include("/childviews/footer")
@endsection

@section('script')

@endsection
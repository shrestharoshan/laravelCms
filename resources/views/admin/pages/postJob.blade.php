@extends('admin.layouts.master')

{{--Main Navigation--}}
@section('main-container')
    {{--List Posts--}}

    @include('admin.inc.postJob')

@endsection

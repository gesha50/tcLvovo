

@extends('layouts.app')

@section('content')
    <carousel></carousel>
    @include('blocks.rentPlace')
    @include('blocks.serviceReview')
    @include('blocks.allService')
@endsection

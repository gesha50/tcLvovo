@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Отзыв №{{$reviews->id}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.reviews.index') }}">Кeviews</a></li>
            <li class="breadcrumb-item active">Отзыв №{{$reviews->id}}</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-success m-2 text-white" href="{{route('admin.reviews.create')}}">
                    Добавить новый отзыв
                </a>
                <a class="btn btn-warning m-2" href="{{route('admin.reviews.edit', $reviews->id)}}">
                    Редактировать этот отзыв
                </a>
            </div>
            <div class="card">
                <h3>{{$reviews->name}}</h3>
                <h5>{{$reviews->worker}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$reviews->review}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

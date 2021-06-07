@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Новость №{{$services->id}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.services.index') }}">News</a></li>
            <li class="breadcrumb-item active">Новость №{{$services->id}}</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-success m-2 text-white" href="{{route('admin.services.create')}}">
                    Добавить новую услугу
                </a>
                <a class="btn btn-warning m-2" href="{{route('admin.services.edit', $services->id)}}">
                    Редактировать эту услугу
                </a>
            </div>
            <div class="card">
                <i class="fa {{$services->icon_class}}"></i>
                <h3>{{$services->services_name}}</h3>
                <h5>{{$services->company}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$services->preview}}</p>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$services->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

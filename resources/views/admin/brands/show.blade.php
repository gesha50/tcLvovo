@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Бренд №{{$brands->id}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.brands.index') }}">Brands</a></li>
            <li class="breadcrumb-item active">Бренд №{{$brands->id}}</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-success m-2 text-white" href="{{route('admin.brands.create')}}">
                    Добавить новый бренд
                </a>
                <a class="btn btn-warning m-2" href="{{route('admin.brands.edit', $brands->id)}}">
                    Редактировать этот бренд
                </a>
            </div>
            <div class="card">
                <h3>{{$brands->title}}</h3>
                <h5>{{$brands->link}}</h5>
                <div class="card-body">
                    <img width="20%" src="{{$brands->image}}" alt="">
                </div>
                <div class="card-body">
                    <p class="card-text">{{$brands->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

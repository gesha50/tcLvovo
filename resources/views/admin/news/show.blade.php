@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Новости</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">News</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-success m-2 text-white" href="{{route('admin.news.create')}}">
                    Добавить новую новость
                </a>
                <a class="btn btn-warning m-2" href="{{route('admin.news.edit', $news->id)}}">
                    Редактировать эту новость
                </a>
            </div>
            <div class="card">
                <h3>{{$news->title}}</h3>
                <h5>{{$news->full_title}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$news->preview}}</p>
                </div>
                <img src="{{$news->image}}" alt="Card image">
                <div class="card-body">
                    <p class="card-text">{{$news->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

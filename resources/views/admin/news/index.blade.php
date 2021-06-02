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
            </div>
            @foreach ($news as $obj)
                <div class="card p-1 newsCard">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>{{$obj->title}}</h3>
                            <p>{{$obj->preview}}</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{$obj->image}}" alt="">
                        </div>
                        <div class="col-md-2 text-center">
                            <a class="btn btn-dark m-2 text-white" href="{{route('admin.news.show', $obj->id)}}">Подробнее</a>
                            <a class="btn btn-warning m-2" href="{{route('admin.news.edit', $obj->id)}}">Редактировать</a>
                            <form action="{{route('admin.news.destroy', $obj->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-2" type="submit">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">История</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">History</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-success m-2 text-white" href="{{route('admin.histories.create')}}">
                    Добавить новую "веху" в компании ТК Львово
                </a>
            </div>
            @foreach ($history as $obj)
                <div class="card p-1 newsCard">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{$obj->year}}</h3>
                        </div>
                        <div class="col-md-7">
                            <h3>{{$obj->title}}</h3>
                            <p>{{$obj->description}}</p>
                        </div>
                        <div class="col-md-2 text-center">
                            <a class="btn btn-dark m-2 text-white" href="{{route('admin.histories.show', $obj->id)}}">Подробнее</a>
                            <a class="btn btn-warning m-2" href="{{route('admin.histories.edit', $obj->id)}}">Редактировать</a>
                            <form action="{{route('admin.histories.destroy', $obj->id)}}" method="POST">
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

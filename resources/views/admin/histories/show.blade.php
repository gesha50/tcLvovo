@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">История {{$history->year}} г.</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.histories.index') }}">History</a></li>
            <li class="breadcrumb-item active">Истори {{$history->year}}г.</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-success m-2 text-white" href="{{route('admin.histories.create')}}">
                    Добавить новую "веху" в компании ТК Львово
                </a>
                <a class="btn btn-warning m-2" href="{{route('admin.histories.edit', $history->id)}}">
                    Редактировать эту историю
                </a>
            </div>
            <div class="card">
                <h2>{{$history->year}}</h2>
                <h3>{{$history->title}}</h3>
                <div class="card-body">
                    <p class="card-text">{{$history->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

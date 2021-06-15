@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Заголовки и описание</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Page Information</li>
        </ol>
        @foreach ($pageInfo as $obj)
            <div class="card">
                <h3 class="card-header">{{$obj->page}}</h3>
                <div class="card-body">
                    <h4 class="card-title">{{$obj->title}}</h4>
                    <p class="card-text">{{$obj->description}}</p>
                    <a class="btn btn-warning  m-1" href="{{route('admin.page_info.edit', $obj->id)}}">Редактировать</a>
                </div>
            </div>
        @endforeach
@endsection

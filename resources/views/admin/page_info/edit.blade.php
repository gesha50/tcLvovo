@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Редактировать заголовок и описание</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.page_info.index') }}">Page Information</a></li>
            <li class="breadcrumb-item active">Для страницы - {{$pageInfo->page}}</li>
        </ol>
        <div class="newsContainer">
            <h3 class="card-title">{{$pageInfo->page}}</h3>
            <form method="POST" action="{{ route('admin.page_info.update', $pageInfo) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input
                        name="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        value="{{ old('title', $pageInfo->title) }}"
                    >
                </div>
                @foreach($errors->get('title') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="description">Описание</label>
                    <input
                        name="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        id="description"
                        value="{{ old('description', $pageInfo->description) }}"
                    >
                </div>
                @foreach($errors->get('description') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <button type="submit" class="btn btn-success">Редактировать заголовок и описание</button>
            </form>
        </div>
    </div>
@endsection

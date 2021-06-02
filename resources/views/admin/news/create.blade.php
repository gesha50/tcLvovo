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
            <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input
                        name="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        placeholder="Открылся новый магазин"
                        value="{{ old('title') }}"
                    >
                </div>
                @foreach($errors->get('title') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <div class="form-group">
                    <label for="full_title">Большой Заголовок</label>
                    <input
                        name="full_title"
                        type="text"
                        class="form-control @error('full_title') is-invalid @enderror"
                        id="full_title"
                        placeholder="Открылся новый магазин по названием..."
                        value="{{ old('full_title') }}"
                    >
                </div>
                @foreach($errors->get('full_title') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <div class="form-group">
                    <label for="preview">Короткое описание</label>
                    <input
                        name="preview"
                        type="text"
                        class="form-control @error('preview') is-invalid @enderror"
                        id="preview"
                        placeholder="Он очень прострорный..."
                        value="{{ old('preview') }}"
                    >
                </div>
                @foreach($errors->get('preview') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <div class="form-group">
                    <label for="description">Длинное описание</label>
                    <input
                        name="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        id="description"
                        placeholder="Еда потрясающая..."
                        value="{{ old('description') }}"
                    >
                </div>
                @foreach($errors->get('description') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <input type="file" class="form-control-file m-2"
                       id="image" name="image"
                       accept="image/*">
                <button type="submit" class="btn btn-success">Добавить новость</button>
            </form>
        </div>
    </div>
@endsection

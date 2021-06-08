@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Редактировать бренд</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.brands.index') }}">Brands</a></li>
            <li class="breadcrumb-item active">Редактировать бренд #{{$brands->id}}</li>
        </ol>
        <div class="newsContainer">
            <form method="POST" action="{{ route('admin.brands.update', $brands) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input
                        name="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        placeholder="Пятерочка"
                        value="{{ old('title', $brands->title) }}"
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
                        placeholder="Замечательный супермаркет..."
                        value="{{ old('description', $brands->description) }}"
                    >
                </div>
                @foreach($errors->get('description') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <div class="form-group">
                    <label for="link">ссылка на сайт бренда</label>
                    <input
                        name="link"
                        type="text"
                        class="form-control @error('link') is-invalid @enderror"
                        id="link"
                        placeholder="https://5ka.ru/"
                        value="{{ old('link', $brands->link) }}"
                    >
                </div>
                @foreach($errors->get('link') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <input type="file" class="form-control-file m-2"
                       id="image" name="image"
                       accept="image/*"
                       value="{{$brands->image}}"
                >
                <button type="submit" class="btn btn-success">Изменить бренд</button>
            </form>
        </div>
    </div>
@endsection

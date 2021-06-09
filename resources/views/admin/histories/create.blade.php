@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Новая история</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.histories.index') }}">History</a></li>
            <li class="breadcrumb-item active">Добавить новую "веху"</li>
        </ol>
        <div class="newsContainer">
            <form method="POST" action="{{ route('admin.histories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="year">Год этого события</label>
                    <input
                        name="year"
                        type="text"
                        class="form-control @error('year') is-invalid @enderror"
                        id="year"
                        placeholder="1999"
                        value="{{ old('year') }}"
                    >
                </div>
                @foreach($errors->get('year') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input
                        name="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        placeholder="Основание компании"
                        value="{{ old('title') }}"
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
                        placeholder="В этот год произошли координальные изменения..."
                        value="{{ old('description') }}"
                    >
                </div>
                @foreach($errors->get('description') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach
                <button type="submit" class="btn btn-success">Добавить историю</button>
            </form>
        </div>
    </div>
@endsection

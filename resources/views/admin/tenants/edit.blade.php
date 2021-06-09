@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Редактировать достоинство</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.tenants.index') }}">Dignities</a></li>
            <li class="breadcrumb-item active">Редактировать достоинство</li>
        </ol>
        <div class="newsContainer">
            <form method="POST" action="{{ route('admin.tenants.update', $tenants) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">Название достоинства</label>
                    <input
                        name="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        placeholder="Безопасность"
                        value="{{ old('title', $tenants->title) }}"
                    >
                </div>
                @foreach($errors->get('title') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="description">Полное описание</label>
                    <input
                        name="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        id="description"
                        placeholder="Охраняемая территория..."
                        value="{{ old('description', $tenants->description) }}"
                    >
                </div>
                @foreach($errors->get('description') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="icon_class">CSS-класс иконки можно взять
                        <a
                            target="_blank"
                            href="https://fontawesome.com/v5.15/icons?d=gallery&p=2"
                        >здесь</a>
                    </label>
                    <input
                        name="icon_class"
                        type="text"
                        class="form-control @error('icon_class') is-invalid @enderror"
                        id="icon_class"
                        placeholder="fa-car"
                        value="{{ old('icon_class', $tenants->icon_class) }}"
                    >
                </div>
                @foreach($errors->get('icon_class') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <button type="submit" class="btn btn-success">Редактировать достоинство</button>
            </form>
        </div>
    </div>
@endsection

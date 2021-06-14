@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Новый отзыв</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.reviews.index') }}">Reviews</a></li>
            <li class="breadcrumb-item active">Добавить новый отзыв</li>
        </ol>
        <div class="newsContainer">
            <form method="POST" action="{{ route('admin.reviews.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Ваше имя</label>
                    <input
                        name="name"
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        placeholder="Сергей"
                        value="{{ old('name') }}"
                    >
                </div>
                @foreach($errors->get('name') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="worker">Профессия или должность</label>
                    <input
                        name="worker"
                        type="text"
                        class="form-control @error('worker') is-invalid @enderror"
                        id="worker"
                        placeholder="Директор"
                        value="{{ old('worker') }}"
                    >
                </div>
                @foreach($errors->get('worker') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="review">Отзыв</label>
                    <input
                        name="review"
                        type="text"
                        class="form-control @error('review') is-invalid @enderror"
                        id="review"
                        placeholder="Я в восторге от..."
                        value="{{ old('review') }}"
                    >
                </div>
                @foreach($errors->get('review') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <button type="submit" class="btn btn-success">Добавить отзыв</button>
            </form>
        </div>
    </div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="bgForBreadcrumb"></div>
    <div class="container blockForBreadcrumd">
        <div class="d-flex justify-content-between p-3">
            <h1 class="blockForBreadcrumd__header">Наша компания</h1>
            <div class="blockForBreadcrumd__contact">
                <a class="blockForBreadcrumd__link" href="#">Связаться с нами
                    <div class="line"></div></a>
            </div>
        </div>
        <breadcrumb-component></breadcrumb-component>
    </div>
    <content-component></content-component>
@endsection


@extends('dashboard.layouts.layout')

@section('title','العملاء')
@section('main_content')
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">إضافة </li>
        <li class="breadcrumb-item"><a href="{{ route('create.product') }}">منتج جديد</a>
        </li>
        <!-- Breadcrumb Menu-->
        {{-- <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;داشبرد</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>
            </div>
        </li> --}}
    </ol>


    <!--/.container-fluid-->
</main>
@endsection
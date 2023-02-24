@extends('dashboard.layouts.layout')

@section('title','المبيعات')
@section('main_content')
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">قسم </li>
        <li class="breadcrumb-item"><a href="{{ url('/',$page='invoices') }}">المبيعات</a>
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
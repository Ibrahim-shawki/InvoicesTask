@extends('dashboard.layouts.layout')

@section('title','العملاء')
@section('main_content')
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">إضافة </li>
        <li class="breadcrumb-item"><a href="{{ route('create.coustomer') }}">عميل جديد</a>
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
        <div class="container-fluid">
            <form class="container-fluid ">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">إسم العميل </label>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">العنوان</label>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control " id="exampleInputPassword1">
                    <label for="exampleInputPassword1" class="form-label">البريد الإلكتروني</label>
                </div >
                <div class="">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>

    <!--/.container-fluid-->
</main>

@endsection
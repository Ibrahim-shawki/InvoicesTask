@extends('dashboard.layouts.layout')

@section('title','العملاء')
@section('main_content')
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">تعديل </li>
        <li class="breadcrumb-item"><a href="#">بيانات العميل</a>
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
            {{-- Message --}}
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Success !</strong> {{ session('success') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Error !</strong> {{ session('error') }}
                </div>
            @endif           
                <form class="container-fluid " action="{{ route('coustomers.update',$coustomer->id) }} " method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">إسم العميل</label>
                      <input type="text" class="form-control"name="name" value="{{ $coustomer->name }}">
                    </div>
                    <div class="mb-3 form-check">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">العنوان</label>
                      <input type="text" class="form-control" name="title" value="{{ $coustomer->title }}">
                    </div>
                    <div class="mb-3 form-check">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control" name="email" value="{{ $coustomer->email }}">
                    </div>
                    <div class="mb-3 form-check">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
    
    <!--/.container-fluid-->
</main>

@endsection
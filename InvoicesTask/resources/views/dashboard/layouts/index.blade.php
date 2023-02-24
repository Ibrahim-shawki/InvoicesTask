@extends('dashboard.layouts.layout')

@section('title','لوحة التحكم')


@section('main_content')
<main class="main">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">الصفحه </li>
        <li class="breadcrumb-item"><a href="{{ url('/',$page='home') }}">الرئيسة</a>
        </li>

    </ol>

<div class="container-fluid">

    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-primary">
                    <div class="card-block p-b-0">

                        <h4 class="m-b-0">9.823</h4>
                        <p>العملاء</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart1" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-info">
                    <div class="card-block p-b-0">
                        <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                            <i class="icon-location-pin"></i>
                        </button>
                        <h4 class="m-b-0">9.823</h4>
                        <p> المنتجات</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart2" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-warning">
                    <div class="card-block p-b-0">
                        <h4 class="m-b-0">9.823</h4>
                        <p>الفواتير </p>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart3" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-danger">
                    <div class="card-block p-b-0">

                        <h4 class="m-b-0">9.823</h4>
                        <p>الفواتير </p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart4" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

        </div>
        <!--/row-->
    </div>

</div>
@endsection

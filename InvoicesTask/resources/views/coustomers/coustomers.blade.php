@extends('dashboard.layouts.layout')

@section('title','العملاء')
@section('main_content')
<main class="main">
    <?php
    $id = 1;
    ?>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">قسم </li>
        <li class="breadcrumb-item"><a href="{{ url('/',$page='coustomers') }}">العملاء</a>
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

        <div class="contianer container-fluid ">
            <table class="table ">

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
                <thead>
                    <tr>
                        <th scope="col">عدد العملاء</th>
                        <th scope="col">اسم العميل</th>
                        <th scope="col">عنوان العميل</th>
                        <th scope="col">البريد الإلكتروني</th>
                    <th scope="col">تعديل البيانات</th>
                    <th scope="col">حذف العميل</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      
                      @foreach ($coustomers as $coustomer)
                    <th scope="row"><?php echo $id++?></th>
                    <td>{{ $coustomer->name }}</td>
                    <td>{{ $coustomer->title }}</td>
                    <td>{{ $coustomer->email }}</td>
                    {{-- <td><button type="button" class="btn btn-success">Success</button></td> --}}
                    <td><a class="btn btn-success" href="{{ route('coustomers.edit',$coustomer->id) }}" role="button">تعديل البيانات</a></td>
                    <td>
                        <form action="{{ route('coustomers.destroy',$coustomer->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">حذف العميل</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    <!--/.container-fluid-->
</main>
@endsection
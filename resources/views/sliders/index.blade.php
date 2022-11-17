@extends('layouts.master')
@section('css')
    @section('title')

     قائمه اعلانات المتجر
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
     اعلانات المتجر
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session()->has('create'))
                                    <div class="alert alert-danger">
                                        {{session()->get('create')}}
                                    </div>
                                @endif

                                @if (session()->has('update'))
                                    <div class="alert alert-danger">
                                        {{session()->get('update')}}
                                    </div>
                                @endif

                                @if (session()->has('delete'))
                                    <div class="alert alert-danger">
                                        {{session()->get('delete')}}
                                    </div>
                                @endif
                                    @if (session()->has('status'))
                                        <div class="alert alert-danger">
                                            {{session()->get('status')}}
                                        </div>
                                    @endif
                                    <a href="{{route('sliders.create')}}" class="btn btn-success btn-sm" role="button"
                                       aria-pressed="true">اعلان جديد</a>


                                <div class="table-responsive">

                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">

                                        <thead>
                                        <tr>
                                            <th>رقم الاعلان</th>
                                            <th>حاله الاعلان</th>
                                            <th>وصف الاعلان</th>
                                            <th>التحكم</th>
                                        </tr>
                                        </thead>

                                        @foreach($sliders as $slider)
                                            <tbody>

                                            <tr>

                                                <td>{{$slider->id}}</td>
                                                <td>{{$slider->status()}}</td>
                                                <td>{{$slider->advertisement}}</td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            العمليات
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('sliders.status',$slider->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;تغيير حاله الاعلان</a>
                                                            <a class="dropdown-item" href="{{route('sliders.edit',$slider->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp; تعديل بيانات الاعلان</a>
                                                            <a class="dropdown-item" href="{{route('sliders.delete',$slider->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;حذف الاعلان</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

@extends('layouts.master')
@section('css')
@section('title')

    قائمه عرض المنتجات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    عرض المنتجات
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

                                @if (session()->has('success'))
                                    <div class="alert alert-danger">
                                        {{session()->get('success')}}
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

                                    @if (session()->has('import'))
                                        <div class="alert alert-danger">
                                            {{session()->get('import')}}
                                        </div>
                                    @endif

                                    @if (session()->has('export'))
                                        <div class="alert alert-danger">
                                            {{session()->get('export')}}
                                        </div>
                                    @endif

                                    @if (session()->has('status'))
                                        <div class="alert alert-danger">
                                            {{session()->get('status')}}
                                        </div>
                                    @endif

                                <a href="{{route('products.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافه منتج جديد</a>

                                    <a href="{{ route('products.export') }}" class="btn btn-success btn-sm" role="button"
                                       aria-pressed="true">تصدير ملفات اكسل</a><br><br>

                                    <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control">
                                        <br>
                                        <button class="btn btn-success">استيراد ملفات اكسل </button>
                                    </form>
                                <div class="table-responsive">

                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">

                                        <thead>
                                        <tr>
                                            <th>رقم المنتج</th>
                                            <th>اسم المنتج</th>
                                            <th>صوره المنتج</th>
                                            <th>باركود المنتج</th>
                                            <th>سعر المنتج</th>
                                            <th>تفاصيل المنتج</th>
                                            <th>حاله المنتج</th>
                                            <th>التحكم</th>

                                        </tr>
                                        </thead>
                                        @foreach($products as $product)
                                            <tbody>

                                            <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>
                                                <img style="width: 80px;height: 80px;border-radius: 4px" src="{{URL::to('/products/'.$product->img) ?? ''}}">

                                            </td>
                                            <td>{{$product->barcode}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->details}}</td>
                                            <td>{{$product->status()}}</td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        العمليات
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{route('products.status',$product->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;تغيير حاله المنتج</a>
                                                        <a class="dropdown-item" href="{{route('products.edit',$product->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp; تعديل بيانات المنتج</a>
                                                        <a class="dropdown-item" href="{{route('products.delete',$product->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;حذف المنتج</a>

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

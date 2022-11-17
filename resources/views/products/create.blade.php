@extends('layouts.master')
@section('css')
@section('title')
    اضافه المنتجات
@stop
@endsection

@section('PageText')

  قائمه اضافه المنتجات
@stop
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')

    اضافه منتج جديد
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
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

                    <form method="post"  action="{{route('products.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">اضافه منتج جديد</h6><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>اسم المنتج  : <span class="text-danger">*</span></label>
                                    <input  type="text" name="name"  class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>باركود المنتج  : <span class="text-danger">*</span></label>
                                    <input  class="form-control" name="barcode" type="text" >
                                </div>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> سعر المنتج  :</label>
                                    <input  type="number" name="price" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> تفاصيل المنتج   :</label>
                                    <textarea  type="number" name="details" class="form-control" ></textarea>
                                </div>
                            </div>



                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="academic_year"> صوره المنج : <span class="text-danger">*</span></label>
                                <input type="file"  name="img" multiple>
                            </div>
                        </div>



                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

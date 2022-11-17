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


    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">

                                <div class="form-group">
                                    <input style="outline: none;padding: 10px;border: none;border: 1px solid #ccc" type="text" class="form-controller" id="search" name="barcode" placeholder="ابحث بالباركود">
                                </div>

                                <div class="table-responsive">

                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>رقم المنتج</th>
                                            <th>اسم المنتج</th>
                                            <th>باركود المنتج</th>
                                            <th>سعر المنتج</th>
                                            <th>تفاصيل المنتج</th>
                                            <th>تعديل المنتج</th>

                                        </tr>
                                        </thead>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div class="panel-heading">--}}
{{--                    <h3>Products info </h3>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" class="form-controller" id="search" name="barcode">--}}
{{--                    </div>--}}
{{--                    <table class="table table-bordered table-hover">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>رقم المنتج</th>--}}
{{--                            <th>اسم المنتج</th>--}}
{{--                            <th>باركود المنتج</th>--}}
{{--                            <th>سعر المنتج</th>--}}
{{--                            <th>تفاصيل المنتج</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : '{{URL::to('/products/getSearch')}}',
                data:{'barcode':$value},
                success:function(data){
                    $('tbody').html(data);
                }
            });
        })
    </script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>


@endsection


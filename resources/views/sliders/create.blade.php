@extends('layouts.master')
@section('css')
    @section('title')
        اضافه اعلان جديد
    @stop
@endsection

@section('PageText')

   اضافه اعلان جديد
@stop
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')

        اضافه اعلان جديد
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

                    <form method="post"  action="{{route('sliders.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6 style="font-family: 'Cairo', sans-serif;color: blue"> اضافه اعلان جديد</h6><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>وصف الاعلان  : <span class="text-danger">*</span></label>
                                    <textarea  type="text" name="advertisement"  class="form-control"></textarea>
                                </div>
                            </div>

                        </div>


                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ</button>
                    </form>

            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

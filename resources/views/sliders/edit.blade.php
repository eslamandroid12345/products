@extends('layouts.master')
@section('css')
    @section('title')
      تعديل بيانات الاعلان
    @stop
@endsection

@section('PageText')

    تعديل بيانات الاعلان
@stop
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')

        تعديل بيانات الاعلان
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

                    <form method="post"  action="{{route('sliders.update', $slider->id)}}" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">  تعديل بيانات الاعلان</h6><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>وصف الاعلان  : <span class="text-danger">*</span></label>
                                    <textarea  type="text" name="advertisement"  class="form-control">{{$slider->advertisement}}</textarea>
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">تعديل بيانات الاعلان</button>
                    </form>

                </div>
            </div>
        </div>
        <!-- row closed -->
@endsection


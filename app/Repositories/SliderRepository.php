<?php

namespace App\Repositories;

use App\Http\Requests\StoreSliderRequest;
use App\Interfaces\SliderRepositoryInterface;
use App\Models\Slider;

class SliderRepository implements SliderRepositoryInterface {


    public function index(){

        try {

        $sliders = Slider::query()->get();

        return view('sliders.index', compact('sliders'));

        }catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }

    }

    public function store(StoreSliderRequest $request){

        try {

            $slider = new Slider();
            $slider->advertisement = $request->advertisement;
            $slider->save();

            return redirect()->route('sliders.index')->with('create','تم تسجيل بيانات الاعلان بنجاح');

        }catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }


    }

    public function create(){


        return view('sliders.create');

    }

    public function edit($id){


        try {

            $slider = Slider::findOrFail($id);

            return view('sliders.edit', compact('slider'));

        }catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }

    }

    public function update(StoreSliderRequest $request,$id){



        try {

            $slider = Slider::findOrFail($id);
            $slider->advertisement = $request->advertisement;
            $slider->save();

            return redirect()->route('sliders.index')->with('update','تم تعديل بيانات الاعلان بنجاح');

        }catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }
    }

    public function delete($id){

        try {


            $slider = Slider::findOrFail($id);
            $slider->delete();
            return redirect()->route('sliders.index')->with('delete','تم حذف بيانات الاعلان بنجاح');

        }catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }


    }

    public function status($id){


        try {

            $slider = Slider::findOrFail($id);
            $slider->status = $slider->status == 1 ? 0 : 1;
            $slider->save();

            return redirect()->back()->with('status','تم تعديل حاله الاعلان');


        }catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }

    }


}
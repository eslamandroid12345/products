<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Interfaces\SliderRepositoryInterface;

class SliderController extends Controller
{

    public $sliderRepositoryInterface;

    public function __construct(SliderRepositoryInterface $sliderRepositoryInterface){

        $this->sliderRepositoryInterface = $sliderRepositoryInterface;
    }



     public function store(StoreSliderRequest $request){

         return $this->sliderRepositoryInterface->store($request);

     }

    public function index(){

        return $this->sliderRepositoryInterface->index();

    }

    public function create(){

        return $this->sliderRepositoryInterface->create();


    }

    public function edit($id){


        return $this->sliderRepositoryInterface->edit($id);

    }

    public function update(StoreSliderRequest $request,$id){

        return $this->sliderRepositoryInterface->update($request,$id);


    }

    public function delete($id){

        return $this->sliderRepositoryInterface->delete($id);


    }

    public function status($id){

        return $this->sliderRepositoryInterface->status($id);


    }


}

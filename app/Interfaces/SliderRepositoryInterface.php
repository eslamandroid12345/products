<?php

namespace App\Interfaces;

use App\Http\Requests\StoreSliderRequest;

interface SliderRepositoryInterface{


    public function index();
    public function store(StoreSliderRequest $request);
    public function create();
    public function edit($id);
    public function update(StoreSliderRequest $request,$id);
    public function delete($id);
    public function status($id);


}
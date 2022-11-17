<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller{


    public $productRepositoryInterface;

    public function __construct(ProductRepositoryInterface $productRepositoryInterface){

        $this->productRepositoryInterface = $productRepositoryInterface;

    }

    public function index(){

        return $this->productRepositoryInterface->index();

    }

    public function search(){

        return $this->productRepositoryInterface->search();

    }

    public function getSearch(Request $request){

        return $this->productRepositoryInterface->getSearch($request);

    }

    public function create(){


        return $this->productRepositoryInterface->create();


    }

    public function store(StoreProductRequest $request){

        return $this->productRepositoryInterface->store($request);


    }

    public function edit($id){


        return $this->productRepositoryInterface->edit($id);


    }

    public function update($id,UpdateProductRequest $request){

        return $this->productRepositoryInterface->update($id,$request);


    }

    public function delete($id){

        return $this->productRepositoryInterface->delete($id);

    }

    public function import(){

        return $this->productRepositoryInterface->import();

    }

    public function export(){

        return $this->productRepositoryInterface->export();

    }

    public function allProducts(Request $request){

        return $this->productRepositoryInterface->allProducts($request);

    }

    public function status($id){

        return $this->productRepositoryInterface->status($id);

    }






}

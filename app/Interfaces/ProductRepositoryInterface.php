<?php
namespace App\Interfaces;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

interface ProductRepositoryInterface{

    public function index();
    public function search();
    public function getSearch(Request $request);
    public function create();
    public function store(StoreProductRequest $request);
    public function edit($id);
    public function update($id,UpdateProductRequest $request);
    public function delete($id);
    public function import();
    public function export();
    public function allProducts(Request $request);
    public function status($id);


}

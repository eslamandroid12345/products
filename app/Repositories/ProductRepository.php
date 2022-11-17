<?php


namespace App\Repositories;


use App\Exports\ProductExport;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Imports\ProductsImport;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class ProductRepository implements ProductRepositoryInterface
{


    public function index()
    {

        $products = Product::query()->latest()->get();

        return view('products.index', compact('products'));

    }

    public function create()
    {

        return view('products.create');


    }

    public function store(StoreProductRequest $request)
    {

        try {


            if ($img = $request->file('img')) {

                $destinationPath = 'products/';
                $profileImage = time() . rand(1, 2000) . uniqid() . "." . $img->getClientOriginalExtension();
                $img->move($destinationPath, $profileImage);
                $request['img'] = "$profileImage";
            }


            $product = new Product();
            $product->name = $request->name;
            $product->img = $profileImage;
            $product->barcode = $request->barcode;
            $product->price = $request->price;
            $product->details = $request->details;
            $product->save();


            return redirect()->route('products.all')->with('success', 'تم تسجيل بيانات المنتج بنجاح');


        } catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }

    }

    public function edit($id)
    {

        try {

            $product = Product::findOrFail($id);

            return view('products.edit', compact('product'));


        } catch (\Exception $exception) {


            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }

    }

    public function update($id,UpdateProductRequest $request)
    {


        try {

            $product = Product::findOrFail($id);

            if ($image = $request->file('img')) {

                $destinationPath = 'products/';
                $profileImage = time() . rand(1, 2000) . uniqid() . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request['img'] = "$profileImage";


                $oldImage = $product->img;
                if (file_exists(public_path('/products/' . $oldImage))) {

                    unlink(public_path('/products/' . $oldImage));

                } else {

                    return redirect()->back()->with(['errors' => 'لم يتم حذف الصوره القديمه للمنتج']);
                }
            }


            $product->name = $request->name;
            $product->barcode = $request->barcode;
            $product->price = $request->price;
            $product->details = $request->details;
            $product->save();


            return redirect()->route('products.all')->with('update', 'تم تعديل بيانات المنتج بنجاح');


        } catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }

    }

    public function delete($id)
    {

        try {

            $product = Product::findOrFail($id);
            $product->delete();


            return redirect()->back()->with('delete', 'تم حذف المنتج بنجاح');


        } catch (\Exception $exception) {

            return redirect()->back()->with(['errors' => $exception->getMessage()]);

        }

    }


    public function search()
    {

        return view('products.search');


    }

    public function getSearch(Request $request){


        if ($request->ajax()) {
            $output = "";
            $products = DB::table('products')->where('barcode', '=', $request->barcode)->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>' .
                        '<td>' . $product->id . '</td>' .
                        '<td>' . $product->name . '</td>' .
                        '<td>' . $product->barcode . '</td>' .
                        '<td>' . $product->price . '</td>' .
                        '<td>' . $product->details . '</td>' .
                        '<td><div class="dropdown show">
                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                العمليات
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="'.route('products.edit',$product->id).'"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp; تعديل بيانات المنتج</a>
                                <a class="dropdown-item" href="'.route('products.delete',$product->id).'"><i style="color:green" class="fa fa-edit"></i>&nbsp;حذف المنتج</a>

                            </div>
                        </div></td>' .
                        '</tr>';
                }
                return Response($output);
            }
        }


    }//end search


    public function import(){


        request()->validate([

            'file' => 'required|mimes:xls,xlsx',

        ]);


        Excel::import(new ProductsImport(),request()->file('file'));

        return back()->with('import','تم استيراد ملف الاكسل بنجاح  ');

    }

    public function export(){

        return Excel::download(new ProductExport(), 'products.xlsx');


    }

    public function allProducts(Request $request){


        if ($request->ajax()) {
            $output = "";
            $products = DB::table('products')->where('barcode', '=', $request->barcode)->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<div class="box">' .
                        '<h4>' . $product->name . '</h4>' .
                        '<div class="boxImg">' .
                        '<img src= "'.asset('/products/'.$product->img).'">'
                        .'</div>'.
                        '<span>' . $product->price . "$" . '</span>' .
                        ' <p>' . $product->details . '</p>' .
                        '</div>';
                }
                return Response($output);
            }
        }else{

            $products = Product::query()->where('status','=',1)->get();

        }

        $sliders = Slider::query()->where('status','=',true)->get();

        return view('welcome',compact('products','sliders'));
    }


    public function status($id){

        $product = Product::findOrFail($id);
        $product->status = $product->status == 1 ? 0 : 1;
        $product->save();

        return redirect()->back()->with('status','تم تعديل حاله المنتج بنجاح');


    }


}

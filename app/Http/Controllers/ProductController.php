<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Product;

class ProductController extends Controller
{


public function index(){


  $data=DB::table('products')->get();

  
  
    return view('admin.extends.product_management.manage_product',compact('data'));

}



public function store(Request $request){

        $validated = $request->validate([      
        'product_name' => 'required',
        'supplier_name' => 'required',
        'short_description' => 'required',
        'long_description' => 'required',
        'original_price' => 'required',
        'sale_price' => 'required',

        
    ]);



$admin = array(
'product_name' => $request->product_name,
'supplier_name' =>$request->supplier_name,
'short_description' => $request->short_description,
'long_description' => $request->long_description,
'original_price' => $request->original_price,
'sale_price' => $request->sale_price,
'created_at' => Carbon::now(),
);
DB::table('products')
->insert($admin);
return redirect()->back()->with('success', 'Product  Successfully Added');
}

public function show($id){
$data=Product::where('id',$id)->first();
return view('admin.extends.product_management.manage_product'.compact('data'));

}


public function edit($id){

$data=Product::where('id',$id)->first();

return view('admin.extends.product_management.update_product',compact('data'));
}

public function update(Request $request,$id){


        $validated = $request->validate([      
            'product_name' => 'required',
            'supplier_name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'original_price' => 'required',
            'sale_price' => 'required',
       

        
    ]);
   
  
  $data=Product::where('id',$id)->update([
    'product_name' => $request->product_name,
    'supplier_name' =>$request->supplier_name,
    'short_description' => $request->short_description,
    'long_description' => $request->long_description,
    'original_price' => $request->original_price,
    'sale_price' => $request->sale_price,
  'updated_at' => Carbon::now(),
 
  ]);
  return redirect()->back()->with('success', 'Product  Successfully Updated');
}



public function destroy($id){
$data=Product::where('id',$id)->delete();
return redirect()->back()->with('success', 'Product  Successfully Deleted');
}

	public function add_product(){

       
    return view('admin.extends.product_management.add_product');
}



}
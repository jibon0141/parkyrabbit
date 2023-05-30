<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Inventory;
use App\Models\Product;

class InventoryController extends Controller
{


    public function index(){


        $data=DB::table('inventories')->get();
      
        
        
          return view('admin.extends.inventory_management.manage_inventory',compact('data'));
      
      }
      
      
      
      public function store(Request $request){
      
             
      
        foreach($request->type as $key=>$iteam){

			// echo $key;
			DB::table('inventories')->insert([
                'product_type'=>$request->type[$key],
			'product_id'=>$request->type[$key],
			'previous_stock'=>$request->quantity[$key],
			'current_stock'=>$request->current_quantity[$key],
			

		]);
		}

     
      return redirect()->back()->with('success', 'Product  Successfully Added');
      }


      public function create(){

       $data=Product::get();
        return view('admin.extends.inventory_management.add_inventory',compact('data'));
    }


}
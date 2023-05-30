<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use DB;
use Auth;
use Carbon\Carbon;
use Hash;
use App\Models\User;

class AdminManagementController extends Controller
{


public function index(){


if(request()->ajax()){
$query =User::get();
return DataTables::of($query)
->addColumn('action', function($data){
$button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-success btn-sm edit-post"><i class="far fa-edit"></i></a>';
$button .= '&nbsp;&nbsp;';
$button .= '<button name="delete" id="'.$data->id.'" class="delete btn btn-danger confirmDelete" record="Area" recordid="{{$data->AreaID}}"><i class="fa fa-trash"></i></button>';
return $button;
})
->rawColumns(['action'])
->toJson();
}
else{
return view('admin.extends.admin_management.manage_admin');


}
// $data=MemberRegistration::get();
// return response()->json(['data'=>$data,'code'=>'200']);
}



public function store(Request $request){

        $validated = $request->validate([      
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'photo' => 'required',
        'address' => 'required',
        'password' => 'required',

        
    ]);


$name='admin.jpg';
$image = $request->file('photo');
if ($image) {
$name = time() . '.' . $image->getClientOriginalExtension();
$destinationPath ='assets/backend_upload_asset/admin_image/';
$image->move($destinationPath,$name);
$imageUrl = $destinationPath.$name;}

$admin = array(
'name' => $request->name,
'email' =>$request->email,
'phone' => $request->phone,
'photo' =>$name,
'address' => $request->address,
'password'=>Hash::make($request->password),
'status'=>'1',
'created_at' => Carbon::now(),
);
DB::table('users')
->insert($admin);
return redirect()->back()->with('success', 'admin  Successfully Added');
}

public function show($id){
$data=User::where('id',$id)->first();
return response()->json(['data'=>$data,'msg'=>'data successfully showed','code'=>200]);
}


public function edit($id){
$data=User::where('id',$id)->first();
return response()->json(['data'=>$data,'msg'=>'data successfully showed','code'=>200]);
}

public function update(Request $request,$id){


        $validated = $request->validate([      
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
       

        
    ]);
   
  
  $data=User::where('id',$request->id)->update([
  'name'=>$request->name,
  'email'=>$request->email,
  'phone'=>$request->phone,
  'address'=>$request->address,
  'updated_at' => Carbon::now(),
 
  ]);
  return response()->json(['msg'=>'data successfully updated','code'=>200]);
}


public function destroy($id){
$data=User::where('id',$id)->delete();
return response()->json(['msg'=>'data successfully deleted','code'=>200]);
}

	public function add_admin(){

       
    return view('admin.extends.admin_management.add_admin');
}



}
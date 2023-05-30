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

class AdminProfileController extends Controller
{

public function show_admin(){

    return view('ecommerce.admin.extends.admin_management.manage_admin');
}


public function update_admin_password(Request $request){
	
        
        $id = Auth::user()->id;
        $db_pass = Auth::user()->password;
        $old_pass = $request->old_password;
        $new_pass = $request->new_password;
        $confirm_pass = $request->password_confirmation;

        if(Hash::check($old_pass, $db_pass)){


            if($new_pass == $confirm_pass){

                User::where('id',$id)->update([
                    'password' => Hash::make($new_pass)
                ]);
 
                return redirect()->back()->with('success','Password Changed Successfully');        
                
            }else{
                return back()->with('success','New Password and Confirm Password Does Not Match!');
            }

        }else{

            return redirect()->back()->with('success','Your Current Password Does Not Match!');
        }
}

public function update_profile(Request $request){
  
  
  $data=User::where('id',Auth::user()->id)->update([
  'name'=>$request->name,
  'email'=>$request->email,
  'phone'=>$request->phone,
  'address'=>$request->address,
  'updated_at' => Carbon::now(),
 
  ]);
  return redirect()->back()->with('success','Your Profile Successfully Updated');
}

public function update_profile_picture(Request $request){
// dd($request->all());
  $data=User::where('id','=',Auth::user()->id)->first();
  

   $profile_photo = $data->photo;

        if (($request->has('photo'))) {
          // return 'ok';
          $destinationPath ='assets/backend_upload_asset/admin_image/';
            if (file_exists($destinationPath . $profile_photo)) {
                unlink($destinationPath . $profile_photo);
            }
            $profile_photo = time() . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move($destinationPath, $profile_photo );
        }
     
  
  
  $data=User::where('id',Auth::user()->id)->update([
  'photo'=>$profile_photo,
  
 
  ]);
   return redirect()->back()->with('success','Your Profile Picture Successfully Updated');
}


public function admin_profile(){

	$admin_info=User::where('id','=',Auth::user()->id)->first();

	return view('admin.extends.admin_management.view_profile',compact('admin_info'));
}

}
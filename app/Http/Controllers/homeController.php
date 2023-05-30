<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use App\Models\User;
use DB;
use Auth;
use Hash;
use Carbon\Carbon;

 
class homeController extends Controller
{
	public function login(){
		// return [Hash::make(123456)];
		return view('login');
	}
	public function admin_login(Request $request){
$validated = $request->validate([
'email' => 'required|max:255',
'password' => 'required',
]);
$select_admin=DB::table('users')->where('email','=',$request->email)->first();
if($select_admin ==null){
return redirect('/login')->with('warning','We could not found your email');
}
elseif($select_admin->status==1 && $select_admin->user_type== 'admin'){
$credentials = array(
'email' => $request->input('email'),
'password' => $request->input('password'),
);
$remember = isset($input['remember']) ? $request->input('remember') : false;
if (Auth::attempt($credentials, $remember)) {
return redirect('/admin/dashboard');
}
else {
// dd("not authenticate");
return redirect('/login')->with('warning','Login Failed');
}
}
else {
// dd("not authenticate");
return redirect('/login')->with('warning','Your account have some issue. Please contact support');
}
}


public function admin_logout()
{
Auth::logout();
return redirect('/login')->with('warning', 'You have successfully logged out');
}

public function registration(){

	return view('admin.extends.registration');
}

public function registred (Request $request){

	$admin = array(
		'name' => $request->name,
		'email' =>$request->email,
		'password'=>Hash::make($request->password),
		'status'=>'1',
		'user_type'=>'admin',
		'created_at' => Carbon::now(),
		);
		DB::table('users')
		->insert($admin);
		return redirect()->back()->with('success', 'admin  Successfully Added');

	
}

}
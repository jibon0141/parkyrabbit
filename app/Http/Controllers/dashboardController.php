<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberRegistration;
use App\Models\LoanInfo;
use App\Models\Loan;
use App\Models\TotalSaving;
use App\Models\TotalInstallment;
use App\Models\Savings;
use App\Models\LoanDiscount;
use App\Models\IncomeExpense;
use Illuminate\Http\JsonResponse;
use DB;
use DateTime;
  
class dashboardController extends Controller
{
	
public function admin_dashboard (){

// $members=MemberRegistration::count();

// $loans=LoanInfo::where('type','=','active')->count();

// $total_receivable=LoanInfo::sum('payable');

// $total_saving=TotalSaving::sum('amount');

// $total_installment=TotalInstallment::sum('amount');

// $total_loan_discount=LoanDiscount::sum('discount_amount');


// $total_income=IncomeExpense::where('payment_type','=','income')->sum('amount');
// $total_expense=IncomeExpense::where('payment_type','=','expense')->sum('amount');

// $total_income_expense=$total_income-$total_expense;


// //profit calculation

// $total_cost=$total_saving+$total_installment+$total_loan_discount;
// $total_profit=$total_receivable+$total_income_expense-$total_cost;

return view('admin.extends.dashboard');

}

// public function saving_chart(Request $request):JsonResponse
// {

// // dd($request->all());
// $data[0]['color'] = "#ED43D3";
// $data[0]['name'] = ('Total Saving Growth');
// $total_saving_start = new DateTime( $request->input('start') );
// $total_saving_end   = new DateTime( $request->input('end') );
// for($i = $total_saving_start; $i <= $total_saving_end; $i->modify('+1 day')){
// $saving_sum=DB::table('total_savings')->whereDate('created_at','=',$i->format("Y-m-d"))
// ->sum('amount');
// $round=round($saving_sum,0);
// 	$data[0]['dataPoints'][] = ['x' => $i->format("Y-m-d"), 'y' => $round];


// }

// $data[1]['color'] = "#3BD44A";
// $data[1]['name'] = ('Total Installment Growth');
// $total_installment_start = new DateTime( $request->input('start') );
// $total_installment_end   = new DateTime( $request->input('end') );
// for($i = $total_installment_start; $i <= $total_installment_end; $i->modify('+1 day')){
// $installment_sum=DB::table('total_installments')->whereDate('created_at','=',$i->format("Y-m-d"))
// ->sum('amount');
// $round=round($installment_sum,0);
// 	$data[1]['dataPoints'][] = ['x' => $i->format("Y-m-d"), 'y' => $round];


// }

// return response()->json($data);


 


// }
}

<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Order;

class TransactionController extends Controller
{

	public function __construct(){
        $this->middleware('auth', ['except' => array('transactionSuccess')]);

    }
    public function index(Request $request)
    {
       	$order=new Order();
       	$request->session()->put('user_id',auth()->user()->id);
    	return view('transaction.transactionForm',compact('order'));

    }
    public function store(Requests\TransactionRequest $request)
    {
    	$data=$request->all();

        $data['grand_total']=$request->grand_total;
 		$id = DB::table('orders')->insertGetId([
    		'grand_total'=>$data['grand_total'],
    		'currency'=>$request->currency,
    		'entrepreneur_id'=>auth()->user()->id,
			]);

 		$order_id=$request->session()->put('order_id',$id);
    	$transaction_data=$request->session()->put('transaction_data',$data);


    	return redirect('/pay');
    }
    public function transactionSuccess(Request $request){
    	$transaction_memo=$request->session()->all();
    	return view('transaction.success');
    }
}

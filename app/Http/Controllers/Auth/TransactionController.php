<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    public function show()
    {
        $transaction = transaction::all();
    //    $transaction = DB::table('transaction')->get();
        return view('layouts.transaction.index',compact('transaction'));
    }

    public function delete(Request $request, $transaction_id)
    {
        $transaction = transaction::where(['transaction_id'=>$transaction_id])->first();
        // $users->delete();
        $transaction = transaction::where(['transaction_id'=>$transaction_id])->delete();
        return redirect('/admin/transaction')->with('status','Your Transaction data is Deleted');
    }
}

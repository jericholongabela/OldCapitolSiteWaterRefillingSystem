<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\transaction;
use Illuminate\Http\Request;

class viewTransactionController extends Controller
{

    public function View (){
        $session_email = session('userID');

        $history = transaction::where('userID','=',$session_email)->get();
        $transaction = transaction::where('userID','=',$session_email)->where('status','=',"pending")->first();
        if($transaction == NULL){
            $transaction = transaction::where('userID','=',$session_email)->where('status','=',"Cancelled")->first();

            if($transaction != NULL){
                $time = $transaction->prefferedTime;
            }
            else{
                $time = "No Order";
            }
        }
        else{
            $time = $transaction->prefferedTime;
        }

        return view('viewtransaction',['history'=>$history, 'transaction'=>$time]);
    }
}

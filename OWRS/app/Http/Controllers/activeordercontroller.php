<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class ActiveOrderController extends Controller
{
    public function view(Request $request){
        $session_email = session('userID');


        $transaction = transaction::where('userID','=',$session_email)->where('status','=',"pending")->first();
        if($transaction == NULL){
            $transaction = transaction::where('userID','=',$session_email)->where('status','=',"cancelled")->first();
        }
        $request->session()->put('transacID', $transaction->refID);

        $price1 = 10;
        $price2 = 25;
        $price3 = 35;
        $price4 = 40;
        $totalprice = 0;

        if($transaction->container1 != NULL){
            $transaction->price1 = $price1 * $transaction->container1;
            $totalprice = $totalprice +  $transaction->price1;
        }
        else{
            $transaction->price1 = 0;
        }
        if($transaction->container2 != NULL){
            $transaction->price2 = $price2 * $transaction->container2;
            $totalprice = $totalprice +  $transaction->price2;
        }
        else{
            $transaction->price2 = 0;
        }
        if($transaction->container3 != NULL){
            $transaction->price3 = $price3 * $transaction->container3;
            $totalprice = $totalprice +  $transaction->price3;
        }
        else
            $transaction->price3 = 0;
        if($transaction->container4 != NULL){
            $transaction->price4 = $price4 * $transaction->container4;
            $totalprice = $totalprice +  $transaction->price4;
        }
        else
            $transaction->price4 = 0;

        $transaction->totalprice  = $totalprice;
        return view('activeorder',['transaction'=>$transaction]);
    }
    public function cancel(){
        $id = session('transacID');
        $transaction = transaction::find($id);

        $transaction->status = "Cancelled";
        $transaction->prefferedTime = "Cancelled";
        $transaction->save();
        return redirect()->route('placeorder');
    }
}

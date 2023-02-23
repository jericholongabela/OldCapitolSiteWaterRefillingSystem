<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\transaction;

class profilepageController extends Controller
{
    public function view(){
        $session_email = session('userID');

        $customer_data = Customer::where('userID','=',$session_email)->first();


        $transaction = transaction::where('userID','=',$session_email)->where('status','=',"pending")->first();
        if($transaction == NULL){
            $transaction = transaction::where('userID','=',$session_email)->where('status','=',"cancelled")->first();
        }

        return view('profilepage',['users'=>$customer_data, 'transaction'=>$transaction]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function view(){
        $session_email = session('userID');
        $transaction = transaction::where('userID','=',$session_email)->where('status','=',"pending")->first();
        if($transaction == NULL){
            $transaction = transaction::where('userID','=',$session_email)->where('status','=',"cancelled")->first();

        }
        return view('homepage',['transaction'=>$transaction]);
    }
}

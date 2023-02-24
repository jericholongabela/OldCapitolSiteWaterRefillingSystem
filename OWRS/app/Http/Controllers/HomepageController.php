<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function view(){
        $session_email = session('userID');
        $transaction = transaction::where('userID','=',$session_email)->where('status','=',"Pending")->first();

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
        $pending = transaction::where('status','=',"Pending")->count();
        if($pending == NULL){
            $pending = 0;
        }
        $proccessing = transaction::where('status','=',"Proccessing")->count();
        if($proccessing == NULL){
            $proccessing = 0;
        }
        $todeliver = transaction::where('status','=',"To Deliver")->count();
        if($todeliver == NULL){
            $todeliver = 0;
        }
        return view('homepage',['transaction'=>$time, 'pending'=>$pending, 'proccessing'=>$proccessing, 'todeliver'=>$todeliver]);
    }
}

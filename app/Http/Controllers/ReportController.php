<?php

namespace App\Http\Controllers;

use App\Models\DaysOff;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $users=User::all();


        foreach($users as $key=>$user){
            $payment=$user->payment_per_hour();
            $working_days=$user->workingdays;

            $reports[$key]['user_name']=$user->name;

            $regular_h=0;
            $extra_h=0;
            $total_payment=0;

            foreach($working_days as $day){

                if($this->isWeekend($day->date)){
                    if($day->hours>8){
                        $extra_h+=$day->hours-8;
                        $regular_h+=8;
                        $payment_8h=($payment*1.25)*8;
                        $payment_exh=($payment*1.5)*($day->hours-8);
                        $payment_of_the_day=$payment_8h+$payment_exh ;
                    }
                    else{
                        $regular_h+=$day->hours;
                        $payment_of_the_day=($payment*1.25)*$day->hours;
                    }

                }elseif($this->isDayOff($day->date)){

                    if($day->hours>8){
                        $extra_h+=$day->hours-8;
                        $regular_h+=8;
                        $payment_8h=($payment*1.5)*8;
                        $payment_exh=($payment*2)*($day->hours-8);
                        $payment_of_the_day=$payment_8h+$payment_exh ;
                    }
                    else{
                        $regular_h+=$day->hours;
                        $payment_of_the_day=($payment*1.5)*$day->hours;
                    }
                }else{
                    if($day->hours>8){
                        $extra_h+=$day->hours-8;
                        $regular_h+=8;
                        $payment_8h=($payment)*8;
                        $payment_exh=($payment*1.25)*($day->hours-8);
                        $payment_of_the_day=$payment_8h+$payment_exh ;
                    }
                    else{
                        $regular_h+=$day->hours;
                        $payment_of_the_day=($payment)*$day->hours;
                    }

                }
                $total_payment+=$payment_of_the_day;

            }
            $reports[$key]['reg_h']=$regular_h;
            $reports[$key]['extra_h']=$extra_h;
            $reports[$key]['total_h']=$extra_h+$regular_h;

            $reports[$key]['payment']=$total_payment;
        }


        return view('report')->with([
            'reports'=>$reports,
        ]);
    }


    function isWeekend($date) {
        return (date('N', strtotime($date)) >= 6);
    }

    function isDayOff($date) {
        $daysoff=DaysOff::all()->pluck('date')->toArray();
        if(in_array($date, $daysoff)){
            return true;
        }
        else{
            return false;
        }
    }

}

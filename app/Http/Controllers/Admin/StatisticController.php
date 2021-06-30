<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\Statistic;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function statistic_filter(Request $request){
        $data = $request->all();
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $get = Statistic::whereBetween('statistic_date',[$from_date, $to_date])->orderBy('statistic_date','ASC')->get();
        foreach ($get as $key => $val) {
            $chart_data[] = array(
                'period'=>$val->statistic_date,
                'post'=>$val->statistic_post,
                'like'=>$val->statistic_like,
            );
        }
        echo $data = json_encode($chart_data);
    }

    public function statistic_select(Request $request){
        $data = $request->all();

        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        if($data['dashboard_value']=='ngay'){
            $get = Statistic::whereBetween('statistic_date',[$sub7days, $now])
            ->orderBy('statistic_date','ASC')->get();
        }else if($data['dashboard_value']=='thangtruoc'){
            $get = Statistic::whereBetween('statistic_date',[$headmonthlast, $backmonthlast])
            ->orderBy('statistic_date','ASC')->get();
        }else if($data['dashboard_value']=='thangnay'){
            $get = Statistic::whereBetween('statistic_date',[$headmonthnow, $now])
            ->orderBy('statistic_date','ASC')->get();
        }else{
            $get = Statistic::whereBetween('statistic_date',[$sub365days, $now])
            ->orderBy('statistic_date','ASC')->get();
        }

        foreach ($get as $key => $val) {
            $chart_data[] = array(
                'period'=>$val->statistic_date,
                'post'=>$val->statistic_post,
                'like'=>$val->statistic_like,
            );
        }
        echo $data = json_encode($chart_data);
    }

    public function statistic_show(Request $request){
        $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $get = Statistic::whereBetween('statistic_date',[$sub30days, $now])
        ->orderBy('statistic_date','ASC')->get();

        foreach ($get as $key => $val) {
            $chart_data[] = array(
                'period'=>$val->statistic_date,
                'post'=>$val->statistic_post,
                'like'=>$val->statistic_like,
            );
        }
        echo $data = json_encode($chart_data);
    }
}

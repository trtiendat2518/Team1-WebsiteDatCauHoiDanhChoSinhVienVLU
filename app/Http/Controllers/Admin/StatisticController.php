<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\Statistic;

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
}

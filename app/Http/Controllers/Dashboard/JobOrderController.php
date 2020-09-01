<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class JobOrderController extends Controller
{
    public function index($slug = "")
    {
        if ($slug) {
             $jobOrder =  Order::with(['job' => function($query) use($slug){
                return $query->where('carrer_name', $slug);
            }])->get();
        }else {
            $jobOrder =  Order::all();
        }
        return view('dashboard.job-order.index', compact('jobOrder'));
    }
}

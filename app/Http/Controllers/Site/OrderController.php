<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        try {
            Order::create($request->all());
        }catch (\Exception $e){
            return redirect()->back()->with(['error' => 'error']);
        }

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Dashboard\About;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function about()
    {
        return view('dashboard.about');
    }

    public function addAbout(AboutRequest $request)
    {
        About::create($request->all());
        return redirect()->back();
    }
}

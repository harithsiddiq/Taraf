<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarrerRequest;
use App\Models\Carrer;
use Illuminate\Http\Request;

class CarrerController extends Controller
{
    public function create(Request $request)
    {
        return view('dashboard.carrer.create');
    }

    public function store(CarrerRequest $request)
    {
        Carrer::create($request->only('carrer_name', 'carrer_name_en', 'country_id'));
        return redirect()->back();
    }

    public function show()
    {
        return view('dashboard.carrer.index');
    }

    public function edit($id)
    {
        $job = Carrer::find($id);
        return view('dashboard.carrer.edit', compact('job'));
    }

    public function update(CarrerRequest $request, $id)
    {
        $job = Carrer::find($id);
        $job->update($request->only('carrer_name', 'carrer_name_en', 'country_id'));
        return redirect()->route('carrer.show');
    }
}

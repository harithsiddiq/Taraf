<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function country()
    {
        return view('dashboard.country.create');
    }

    public function store(CountryRequest $request)
    {
        Country::create($request->only('country_ar', 'country_en'));
        return redirect()->back();
    }

    public function show()
    {
        return view('dashboard.country.index');
    }

    public function edit($id)
    {
        $country = Country::find($id);

        return view('dashboard.country.edit', compact('country'));
    }

    public function update(CountryRequest $request, $id)
    {
        $country = Country::find($id);

        $country->update($request->only('country_ar', 'country_en'));
        return redirect()->route('country.show');
    }

}

<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $slider = Slider::all();

        return view('dashboard.slider.index', compact('slider'));
    }

    public function create()
    {
        $slider = Slider::count();
        return view('dashboard.slider.create', compact('slider'));
    }

    public function store(SliderRequest $request)
    {
        $attribute = $request->except('photo');

        if ($request->has('photo')) {
            $photo = uploadImage('slider', $request->photo);
            $attribute['photo'] = $photo;
        }

        Slider::create($attribute);

        return redirect()->route('slider.index');

    }

    public function edit($id)
    {
        $slide = Slider::find($id);

        return view('dashboard.slider.edit', compact('slide'));

    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $attribute = $request->except('photo');

        if ($request->has('photo')) {
            $photo = uploadImage('slider', $request->photo);
            $attribute['photo'] = $photo;
        }

        $slider->update($attribute);

        return redirect()->route('slider.index');

    }


}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CvRequest;
use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{

    public function index()
    {
        $cvs = Cv::all();

        return view('dashboard.cv.index', compact('cvs'));
    }

    public function create()
    {

        return view('dashboard.cv.create');
    }

    public function store(CvRequest $request) {

        Cv::create($request->all());

        return redirect()->route('cv.show');
    }

    public function edit($id)
    {
        $cv =  cv::find($id);

        return view('dashboard.cv.edit', compact('cv'));

    }

    public function update(CvRequest $request, $id)
    {
        $cv = Cv::find($id);

        $cv->update($request->all());

        return redirect()->route('cv.show');
    }

    public function getCvByID($id)
    {

        try {
            return Cv::find($id);
        }catch (\Exception $e){
            return null;
        }
    }

    public function getCv(Request $request)
    {
        $cv = Cv::where("job_".getLocal(), $request->job)->where('nationality_'.getLocal(), $request->country)->get();

        return redirect()->back()->with(['cvs' => $cv]);
    }
}

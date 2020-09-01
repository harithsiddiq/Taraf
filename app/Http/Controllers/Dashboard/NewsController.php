<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('dashboard.news.index', compact('news'));
    }

    public function create()
    {
        return view('dashboard.news.create');
    }

    public function store(NewsRequest $request)
    {

        $attribute = $request->except('photo');

        if ($request->has('photo')) {

            $image = uploadImage('news', $request->photo);

            $attribute['image'] = $image;
        }

        News::create($attribute);

        return redirect()->route('news.index');

    }

    public function edit($id)
    {
        $news = News::find($id);

        return view('dashboard.news.edit', compact('news'));
    }

    public function update(NewsRequest $request, $id)
    {

        $news = News::find($id);

        $news->update($request->except('photo'));

        return redirect()->route('news.index');

    }


}
